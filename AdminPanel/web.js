// Side Panel Toggle
const burger = document.querySelector(".burger");
const leftSide = document.querySelector(".left_panel");
burger.addEventListener("click", () => {
  leftSide.classList.toggle("pClose");
});

// Accordian
const acc = document.getElementsByClassName("sideAccordion");
const accArrow = document.querySelector(".accArrow");
let i;
// Accordian Loop
for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("sideActive");
    // accArrow.classList.toggle("arrowRotate");
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      accArrow.classList.add("arrowDefault");
      accArrow.classList.remove("arrowRotate");
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
      accArrow.classList.remove("arrowDefault");
      accArrow.classList.add("arrowRotate");
    }
  });
}

// URL Based Active Class
$(function ($) {
  var path = window.location.href;
  $(".nav-item a").each(function () {
    if (this.href === path) {
      $(this).addClass("myActive");
    }
  });
});

// DataTable Server Side Code For (index.php)
$(document).ready(function () {
  var t = $("#studentTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxFull.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
        // data can be null or undefined
      },
    ],
    columnDefs: [
      {
        targets: 6, // your case first column
        className: "text-center",
      },
    ],
  });
});

// DataTable Server Side Code For (manage.php)
$(document).ready(function () {
  var t = $("#manageTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxForManage.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Status Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-warning statusTrigger' data-status-id='" +
            rowId +
            "'> <i class='far fa-star'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Delete Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-danger binTrigger' data-bin-id='" +
            rowId +
            "'><i class='fas fa-trash'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: [6, 7, 8], // your case first column
        className: "text-center",
      },
    ],
  });
  if (sessionVar == "null") {
    t.columns([7, 8]).visible(false);
  }
});

// DataTable Server Side Code For (importantFeedback.php)
$(document).ready(function () {
  var t = $("#impFeedbackTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxForImportant.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Status Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-warning statusRemove' data-status-id='" +
            rowId +
            "'> <i class='fas fa-star'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Delete Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-danger binTrigger' data-bin-id='" +
            rowId +
            "'><i class='fas fa-trash'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: [6, 7, 8], // your case first column
        className: "text-center",
      },
    ],
  });
  if (sessionVar == "null") {
    t.columns([7, 8]).visible(false);
  }
});

// DataTable Server Side Code For (recylebin.php)
$(document).ready(function () {
  var t = $("#recylebinTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxForRecylebin.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Status Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-danger deleteBin' data-status-id='" +
            rowId +
            "'> <i class='fas fa-trash'></i></button>"
          );
        },
        sortable: false,
      },
      {
        // Delete Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-success restoreBin' data-bin-id='" +
            rowId +
            "'><i class='fas fa-trash-restore'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: [6, 7, 8], // your case first column
        className: "text-center",
      },
    ],
  });
  if (sessionVar == "null") {
    t.columns([7, 8]).visible(false);
  }
});

// DataTable Server Side Code For (allStudents.php)
$(document).ready(function () {
  var t = $("#allStudentTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxAllStudents.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: 6, // your case first column
        className: "text-center",
      },
    ],
  });
});

// DataTable Server Side Code For (allFeedback.php)
$(document).ready(function () {
  var t = $("#allFeedbackTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxAllFeedback.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: 6, // your case first column
        className: "text-center",
      },
    ],
  });
});

// DataTable Server Side Code For (positiveFeedback.php)
$(document).ready(function () {
  var t = $("#positiveFeedbackTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxPositiveFeedback.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: 6, // your case first column
        className: "text-center",
      },
    ],
  });
});

// DataTable Server Side Code For (negativeFeedback.php)
$(document).ready(function () {
  var t = $("#negativeFeedbackTable").DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
      url: "process/sspRequests/getRecordsAjaxNegativeFeedback.php",
    },
    columns: [
      {
        data: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },
      null,
      null,
      null,
      null,
      null,
      {
        // View Button
        data: function (row) {
          // console.log(row);
          var rowId = row[0];
          return (
            "<button class='btn btn-primary modalTrigger' data-bs-whatever='" +
            rowId +
            "' data-bs-toggle='modal' data-bs-target='#staticBackdrop'><i class='far fa-eye'></i></button>"
          );
        },
        sortable: false,
      },
    ],
    columnDefs: [
      {
        targets: 6, // your case first column
        className: "text-center",
      },
    ],
  });
});

// DataTable Column Search
$(document).ready(function () {
  // Student Table
  var studentTable = $("#studentTable").DataTable();
  $("#studentTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  studentTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // Manage Table
  var manageTable = $("#manageTable").DataTable();
  $("#manageTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  manageTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // ImpFeedback Table
  var impFeedbackTable = $("#impFeedbackTable").DataTable();
  $("#impFeedbackTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  impFeedbackTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // Recylebin Table
  var recylebinTable = $("#recylebinTable").DataTable();
  $("#recylebinTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  recylebinTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // All Student Table
  var allStudentTable = $("#allStudentTable").DataTable();
  $("#allStudentTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  allStudentTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // All Feedback Table
  var allFeedbackTable = $("#allFeedbackTable").DataTable();
  $("#allFeedbackTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  allFeedbackTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // Positive Feedback Table
  var positiveFeedbackTable = $("#positiveFeedbackTable").DataTable();
  $("#positiveFeedbackTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  positiveFeedbackTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });

  // Negative Feedback Table
  var negativeFeedbackTable = $("#negativeFeedbackTable").DataTable();
  $("#negativeFeedbackTable thead th").each(function () {
    var title = $(this).text();
    $(this).html(
      title +
        ' <input type="text" class="form-control" placeholder="Search ' +
        title +
        '" />'
    );
  });
  negativeFeedbackTable.columns().every(function () {
    var table = this;
    $("input", this.header()).on("keyup change", function () {
      if (table.search() !== this.value) {
        table.search(this.value).draw();
      }
    });
  });
});

// Ajax Request For Modals
const staticBackdrop = document.getElementById("staticBackdrop");
staticBackdrop.addEventListener("show.bs.modal", function (event) {
  // Dashboard Table
  $("#studentTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // Manage Table
  $("#manageTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // Important Feedback Table
  $("#impFeedbackTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // Recylebin Feedback Table
  $("#recylebinTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // All Students Table
  $("#allStudentTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // All Feedback Table
  $("#allFeedbackTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // Positive Feedback Table
  $("#positiveFeedbackTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });

  // Negative Feedback Table
  $("#negativeFeedbackTable").on("click", "button", function () {
    // Table Row Id
    var modalId = $(this).attr("data-bs-whatever");

    // Ajax Request For Modal Data
    $.ajax({
      url: "process/getRecordsAjax.php",
      method: "GET",
      data: {
        id: modalId,
      },
      success: function (data) {
        // Student details
        $("#studentName").text(data[0]["fullname"]);
        $("#studentId").text(data[0]["studentid"]);
        $("#studentEmail").text(data[0]["email"]);
        $("#studentPhone").text(data[0]["phonenumber"]);

        // Feedback details
        $("#teacherName").text(data[0]["teachername"]);
        $("#courseRating").text(data[0]["coursesatisfaction"]);
        $("#instructerRating").text(data[0]["instructersatisfaction"]);
        $("#improvement").text(data[0]["courseimprovement"]);
        $("#additional").text(data[0]["specificfeedback"]);
        $("#feedbackTime").text(
          "Created on: " +
            $.format.date(data[0]["date"], "dd MMM yyyy, hh:mm p")
        );
        $(".modalId").attr("data-status-id", data[0]["id"]);
        $(".modalId").attr("data-bin-id", data[0]["id"]);
      },
    });
  });
});

// Send Status
$(document).on("click", ".statusTrigger", function () {
  var statusBtnId = $(this).attr("data-status-id");
  console.log(statusBtnId);
  $.ajax({
    url: "process/getStatus.php",
    methd: "GET",
    data: {
      id: statusBtnId,
      success: function () {
        window.location.reload();
        // Trigger alert
        showAlert("Successfully Status Added", "success");
      },
    },
  });
});

// Remove Status
$(document).on("click", ".statusRemove", function () {
  var statusBtnId = $(this).attr("data-status-id");
  console.log(statusBtnId);
  $.ajax({
    url: "process/removeStatus.php",
    methd: "GET",
    data: {
      id: statusBtnId,
      success: function () {
        window.location.reload();
        // Trigger alert
        showAlert("Successfully Status Removed", "success");
      },
    },
  });
});

// Add To Bin
$(document).on("click", ".binTrigger", function () {
  var BinBtnId = $(this).attr("data-bin-id");
  console.log(BinBtnId);
  $.ajax({
    url: "process/getBin.php",
    methd: "GET",
    data: {
      id: BinBtnId,
      success: function () {
        window.location.reload();
        // Trigger alert
        showAlert("Successfully Deleted", "danger");
      },
    },
  });
});

// Delete From Bin
$(document).on("click", ".deleteBin", function () {
  var BinBtnId = $(this).attr("data-bin-id");
  console.log(BinBtnId);
  $.ajax({
    url: "process/deleteBin.php",
    methd: "GET",
    data: {
      id: BinBtnId,
      success: function () {
        window.location.reload();
        // Trigger alert
        showAlert("Successfully Deleted", "danger");
      },
    },
  });
});

// Restore From Bin
$(document).on("click", ".restoreBin", function () {
  var BinBtnId = $(this).attr("data-bin-id");
  console.log(BinBtnId);
  $.ajax({
    url: "process/restoreBin.php",
    methd: "GET",
    data: {
      id: BinBtnId,
    },
    success: function () {
      window.location.reload();
      // Trigger alert
      showAlert("Successfully Restored", "success");
    },
  });
});

// Show alert
function showAlert(massage, className) {
  const container = document.querySelector(".alParent");
  const subHeading = document.querySelector(".breadcrumb");
  const div = document.createElement("div");
  div.className = `alert alert-${className}`;
  div.appendChild(document.createTextNode(massage));

  container.insertBefore(div, subHeading);

  // Vanish in 2 seconds
  setTimeout(() => {
    document.querySelector(".alert").remove();
  }, 2000);
}
