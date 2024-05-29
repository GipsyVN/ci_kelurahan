$(document).ready(function () {
	//fungsi ini belum digunakan
	$(".thumbnail li").click(function () {
		var url = $(this).find("a").attr("href");
		// load div center-column dengan url dari anchor tsb
		$("#center-column")
			.html("<div class='loading'>Mohon ditunggu .........</div>")
			.load(url);
		return false;
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
