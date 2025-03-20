$(document).ready(function () {
  $("#edit-profile").on("click", function (e) {
    e.preventDefault();
    editProfile(this.dataset.id);
  });

  $(".accept").on("click", function (e) {
    console.log(this.dataset.id);
    e.preventDefault();
    accept(this.dataset.id);
  });

  $(".decline").on("click", function (e) {
    e.preventDefault();
    decline(this.dataset.id);
  });

  $(".delete-button").on("click", function (e) {
    e.preventDefault();
    deleteProjectModal(this.dataset.id);
  });

  $(".view-profile").on("click", function (e) {
    e.preventDefault();
    viewProfile(this.dataset.id);
  });

  $(document).on("click", ".deact", function (e) {
    e.preventDefault();
    deactModal(this.dataset.id);
  });

  $(document).on("click", ".activate", function (e) {
    e.preventDefault();
    activateModal(this.dataset.id);
  });


  function viewProfile(userId) {
    $.ajax({
      type: "GET",
      url: `../dashboard/view_profile.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        $(".modal-container").empty().html(response);
        $("#viewProfileModal").modal("show");
      },
    });
  }





  function deactModal(userId) {
    $.ajax({
      type: "GET",
      url: `../dashboard/deactivate.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        $(".modal-container").empty().html(response);
        $("#deactivateModal").modal("show");

        $("#form-deactivate-user").on("submit", function (e) {
          e.preventDefault();
          saveDeact();
        });
      },
    });
  }

  function saveDeact() {
    $.ajax({
      type: "POST",
      url: "../dashboard/server/deactivate.php",
      data: $("#form-deativate-user").serialize(),
      datatype: "json",
      success: function (e) {
        $("#deactivateModal").modal("hide");
      },
    });
  }


  function activateModal(userId) {
    $.ajax({
      type: "GET",
      url: `../dashboard/activate.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        $(".modal-container").empty().html(response);
        $("#activateModal").modal("show");

        $("#form-activate-user").on("submit", function (e) {
          e.preventDefault();
          saveActivate();
        });
      },
    });
  }

  function saveActivate() {
    $.ajax({
      type: "POST",
      url: "../dashboard/server/activate.php",
      data: $("#form-deativate-user").serialize(),
      datatype: "json",
      success: function (e) {
        $("#activateModal").modal("hide");
      },
    });
  }



  function accept(userId) {
    $.ajax({
      type: "GET",
      url: `../admin-views/accept.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        $(".modal-container").empty().html(response);
        $("#accept").modal("show");

        $("#form-accept-user").on("submit", function (e) {
          e.preventDefault();
          saveAccept();
        });
      },
    });
  }
  function saveAccept() {
    $.ajax({
      type: "POST",
      url: "../admin-views/server/accept.php",
      data: $("#form-accept-user").serialize(),
      datatype: "json",
      success: function (e) {
        $("#accept").modal("hide");
      },
    });
  }

  function decline(userId) {
    $.ajax({
      type: "GET",
      url: `../admin-views/decline.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        $(".modal-container").empty().html(response);
        $("#decline").modal("show");

        $("#form-decline-user").on("submit", function (e) {
          e.preventDefault();
          saveDecline();
        });
      },
    });
  }

  function saveDecline() {
    $.ajax({
      type: "POST",
      url: "../admin-views/server/decline.php",
      data: $("#form-decline-user").serialize(),
      datatype: "json",
      success: function (e) {
        $("#decline").modal("hide");
      },
    });
  }

  function deleteProjectModal(projectId) {
    $.ajax({
      type: "GET",
      url: `../admin-views/delete.php?project_id=${projectId}`,
      datatype: "html",
      success: function (response) {
        $(".delete-modal").empty().html(response);
        $("#deleteProject").modal("show");

        $("#form-delete-project").on("submit", function (e) {
          e.preventDefault();
          deleteProject();
        });
      },
    });
  }

  function deleteProject() {
    $.ajax({
      type: "POST",
      url: `../admin-views/server/delete.php`,
      data: $("form-delete-project").serialize(),
      datatype: "json",
      success: function (e) {
        $("#deleteProject").modal("hide");
      },
    });
  }

  function editProfile(userId) {
    $.ajax({
      type: "GET",
      url: `../admin/edit_student.php?user_id=${userId}`,
      datatype: "html",
      success: function (response) {
        console.log("yawa ka");
        $(".modal-container").empty().html(response);
        $("#editProfile").modal("show");
        $("#form-edit-profile").on("submit", function (e) {
          e.preventDefault();
          updateProfile();
          console.log("habwhahah");
        });
      },
    });
  }

  function updateProfile() {
    $.ajax({
      type: "POST",
      url: "../admin/server/edit_student.php", // Make sure this URL is correct
      data: $("#form-edit-profile").serialize(), // Make sure form id is correct
      dataType: "json",
      success: function (response) {
        $(".invalid-feedback").text("").hide(); // Clear previous error messages
        $(".form-control").removeClass("is-invalid"); // Remove the invalid class

        if (response.status === "error") {
          // If there are errors, display them
          Object.keys(response.errors).forEach((key) => {
            $(`#${key}`).addClass("is-invalid");
            $(`#${key}`)
              .next(".invalid-feedback")
              .text(response.errors[key])
              .show();
          });
          return; // Stop further execution if errors are present
        } else if (response.status === "success") {
          // If successful, hide the modal and alert success
          $("#editProfile").modal("hide");
          alert("Profile edited successfully!");

          // Make sure #home link is visible and trigger click to reload the dashboard
          $("#home").css("display", "block").trigger("click");

          // Alternatively, you could directly reload the dashboard like this:
          // window.location.href = "dashboard.php";
        }
      },
    });
  }
});
