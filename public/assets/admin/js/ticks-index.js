var currentUrl = window.location.href;

// var elements = document.querySelectorAll(".sidebar-ticket a");
// elements.forEach(function (element) {
//   var href = element.querySelector("a").getAttribute("href");
//   if (currentUrl.includes(href)) {
//     element.classList.add("active");
//   }
// });

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "none") {
      panel.style.display = "block";
    } else {
      panel.style.display = "none";
    }
  });
}
$(function () {
  $("#orders-table").DataTable({
    processing: true,
    language: {
      paginate: {
        previous: '<i class="fa-solid fa-angle-left"></i>',
        next: '<i class="fa-solid fa-angle-right"></i>',
      },
    },
    columns: [
      {
        data: "Department",
      },
      {
        data: "Subject",
      },
      {
        data: "Status",
      },
      {
        data: "Last Update",
      },
    ],
  });
});



document.addEventListener("DOMContentLoaded", function() {
  const addMoreBtn = document.querySelector('.addmore-btn');
  let groupIndex = 1;
  addMoreBtn?.addEventListener('click', function() {
      const cloneArea = document.querySelector('.clone-area');
      const clone = cloneArea.cloneNode(true);
      groupIndex++;
      const newDataGroup = `data-group=${groupIndex}`;
      clone.setAttribute('clone-data', newDataGroup);
      const inputs = clone.querySelectorAll('input');

      inputs.forEach(function(input) {
          const currentId = input.getAttribute('id');
          const newIndexId = currentId.replace(/\d+$/, match => parseInt(match) + groupIndex);
          input.setAttribute('id', newIndexId);
          input.setAttribute('name', 'attachments[]');
          input.value = '';
      });

      const deleteBtn = document.createElement('button');
      deleteBtn.textContent = 'Delete';
      deleteBtn.className = 'delete-btn';
      deleteBtn.type = 'button';
      clone.appendChild(deleteBtn);

      deleteBtn.addEventListener('click', function() {
          clone.remove();
      });

      cloneArea.parentNode.parentNode.appendChild(clone);
      clone.style.marginTop = '15px';
  });
});

