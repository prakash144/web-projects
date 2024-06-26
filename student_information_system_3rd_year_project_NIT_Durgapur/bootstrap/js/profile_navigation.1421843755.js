$(document).ready(function () {
    $(document.body).on('click', "#personal_details_tab", function () {
        if (!$("#personal_details_tab").attr("disabled")) {
            window.location.href = "/student/personal_details" + $("#personal_details_tab").attr("url");
        }
    });
    $(document.body).on('click', "#work_experience_tab", function () {
        if (!$("#work_experience_tab").attr("disabled")) {
            window.location.href = "/student/work_experience" + $("#work_experience_tab").attr("url");
        }
    });
    $(document.body).on('click', "#internship_preferences_tab", function () {
        if (!$("#internship_preferences_tab").attr("disabled")) {
            window.location.href = "/student/internship_preferences" + $("#internship_preferences_tab").attr("url");
        }
    });
    $(document.body).on('click', "#education_details_tab", function () {
        if (!$("#education_details_tab").attr("disabled")) {
            window.location.href = "/student/education_details" + $("#education_details_tab").attr("url");
        }
    });
    $(document.body).on('click', "#application_tab", function () {
        if (!$("#application_tab").attr("disabled")) {
            window.location.href = "/application/form" + $("#application_tab").attr("url");
        }
    });
});
