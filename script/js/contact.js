function setupTabs () {
    document.querySelectorAll(".btn").forEach(button =>{
        button.addEventListener("click", () =>{
            const bar = button.parentElement;
            const tabsContainer = bar.parentElement;
            const tabNumber = button.dataset.forTab;
            const tabToActivate = tabsContainer.querySelector(`.tabs_content[data-tab="${tabNumber}"]`);

            bar.querySelectorAll(".btn").forEach(button => {
                button.classList.remove("btn-active");
            });

            tabsContainer.querySelectorAll(".tabs_content").forEach(tab => {
                tab.classList.remove("tabs_content-active");
            });

            button.classList.add("btn-active");
            tabToActivate.classList.add("tabs_content-active");
            tabToActivate.scrollIntoView({ behavior: 'smooth', block: 'center' });
        })
    })
}

document.addEventListener("DOMContentLoaded", () =>{
    setupTabs();
});

