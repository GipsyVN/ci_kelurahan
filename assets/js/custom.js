$(document).ready(function () {
	document.addEventListener("DOMContentLoaded", function () {
		// Select all list items within the thumbnail class
		const listItems = document.querySelectorAll(".thumbnail li");

		// Add click event listeners to all selected elements
		listItems.forEach((item) => {
			item.addEventListener("click", function (event) {
				// Prevent default action
				event.preventDefault();

				// Get the URL from the href attribute of the anchor tag inside the list item
				const url = this.querySelector("a").getAttribute("href");

				// Redirect to the URL
				window.location.href = url;
			});
		});
	});

	$(".custom-file-input").on("change", function () {
		let fileName = $(this).val().split("\\").pop();
		$(this).next(".custom-file-label").addClass("selected").html(fileName);
	});

	$(".form-check-input").on("click", function () {
		const menuId = $(this).data("menu");
		const roleId = $(this).data("role");

		$.ajax({
			url: baseUrl + "admin/changeaccess",
			type: "post",
			data: {
				menuId: menuId,
				roleId: roleId,
			},
			success: function () {
				const redirectUrl = baseUrl + "admin/roleaccess/" + roleId;
				document.location.href = redirectUrl;
			},
		});
	});
});