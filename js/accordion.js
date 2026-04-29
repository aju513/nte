// Accordion toggle
document.querySelectorAll(".accordion__item-title").forEach((title) => {
  title.addEventListener("click", () => {
    const item = title.closest(".accordion__item");
    const isActive = item.classList.contains("active");

    item
      .closest(".accordion")
      .querySelectorAll(".accordion__item")
      .forEach((el) => {
        el.classList.remove("active");
      });

    if (!isActive) item.classList.add("active");
  });
});

// Expand All buttons
function setupExpandAll(btnSelector, scopeSelector) {
  const btn = document.querySelector(btnSelector);
  if (!btn) return;

  const scope = btn.closest(scopeSelector);
  if (!scope) return;

  btn.addEventListener("click", () => {
    const items = scope.querySelectorAll(".accordion__item");
    const allExpanded = [...items].every((el) =>
      el.classList.contains("active"),
    );

    items.forEach((el) => el.classList.toggle("active", !allExpanded));
    btn.textContent = allExpanded ? "See More List" : "Collapse All";
  });
}

setupExpandAll(".expand-all-equipment", "#package-equipments");
setupExpandAll(".expand-all-essentials", "#package-essentials");
setupExpandAll(".expand-all-faqs", "#package-faqs");
