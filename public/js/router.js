document.addEventListener('alpine:init', () => {
    Alpine.data('router', () => ({
        content: '',
        title: document.title,

        init() {
            this.loadContent(window.location.pathname);
            window.addEventListener('popstate', (event) => {
                this.loadContent(event.state?.path || '/');
            });
        },

        navigate(path) {
            history.pushState({ path }, '', path);
            this.loadContent(path);
        },

        async loadContent(path) {
            try {
                const response = await fetch(path, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                });
                if (response.ok) {
                    const html = await response.text();
                    const tempElement = document.createElement('div');
                    tempElement.innerHTML = html;
                    
                    // Extract and set the title
                    const newTitle = tempElement.querySelector('title')?.textContent;
                    if (newTitle) {
                        this.title = newTitle;
                    }
                    
                    // Remove the title element from the content
                    tempElement.querySelector('title')?.remove();
                    
                    // Set the content
                    this.content = tempElement.innerHTML;

                    // Execute scripts
                    tempElement.querySelectorAll('script').forEach(script => {
                        const newScript = document.createElement('script');
                        Array.from(script.attributes).forEach(attr => newScript.setAttribute(attr.name, attr.value));
                        newScript.appendChild(document.createTextNode(script.innerHTML));
                        document.body.appendChild(newScript).parentNode.removeChild(newScript);
                    });
                } else {
                    console.error('Failed to load content');
                }
            } catch (error) {
                console.error('Error loading content:', error);
            }
        }
    }));
});