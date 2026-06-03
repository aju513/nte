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

document.addEventListener("DOMContentLoaded", () => {
  // SHOW MORE
  const equipmentWrapper = document.querySelector(
    ".package__equipment-item-list",
  );

  const toggleBtn = document.querySelector(".expand-all-equipment");

  if (toggleBtn && equipmentWrapper) {
    let expanded = false;
    const hiddenItems = equipmentWrapper.querySelectorAll(
      ".package__equipment-item.hidden-item",
    );

    toggleBtn.addEventListener("click", () => {
      expanded = !expanded;

      equipmentWrapper.classList.toggle("show-all", expanded);

      toggleBtn.textContent = expanded ? "Show less list" : "See more list";
    });
  }

  // DOWNLOAD
  const downloadBtn = document.querySelector(".download-all-btn");

  if (downloadBtn) {
    downloadBtn.addEventListener("click", () => {
      const items = document.querySelectorAll(
        "#package-equipments .package__equipment-item",
      );

      let content = "Equipment List\n\n";

      items.forEach((item) => {
        const title = item.querySelector(
          ".package__equipment-item-title",
        )?.innerText;

        content += `${title}\n`;

        const lists = item.querySelectorAll("li");

        lists.forEach((li, index) => {
          content += `${index + 1}. ${li.innerText}\n`;
        });

        content += `\n`;
      });

      const blob = new Blob([content], {
        type: "text/plain",
      });

      const url = window.URL.createObjectURL(blob);

      const a = document.createElement("a");

      a.href = url;
      a.download = "equipment-list.txt";

      document.body.appendChild(a);

      a.click();

      document.body.removeChild(a);

      window.URL.revokeObjectURL(url);
    });
  }
});
