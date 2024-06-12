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

	$(".status-input").on("click", function () {
        var beroperasi = document.getElementById("buka").checked;
        var tidakBeroperasi = document.getElementById("tutup").checked;
        var tidakBeroperasiUsaha = document.getElementById("namaUsaha");
        var beroperasiNoSurat = document.getElementById("noSuratRT");
        var beroperasiTangSurat = document.getElementById("tang_surat");
        var beroperasiJUsaha = document.getElementById("j_usaha");
        var beroperasiAlamat = document.getElementById("a_usaha");

        if (tidakBeroperasi) {
            tidakBeroperasiUsaha.removeAttribute("readonly");
            beroperasiNoSurat.setAttribute("readonly", true);
            beroperasiNoSurat.value = "";
            beroperasiTangSurat.setAttribute("readonly", true);
            beroperasiTangSurat.value = "";
            beroperasiJUsaha.setAttribute("readonly", true);
            beroperasiJUsaha.value = "";
            beroperasiAlamat.setAttribute("readonly", true);
            beroperasiAlamat.value = "";
            console.log("Test tidak beroperasi berhasil");
        } else if (beroperasi) {
            beroperasiNoSurat.removeAttribute("readonly");
            beroperasiTangSurat.removeAttribute("readonly");
            beroperasiJUsaha.removeAttribute("readonly");
            beroperasiAlamat.removeAttribute("readonly");
            tidakBeroperasiUsaha.setAttribute("readonly", true);
            tidakBeroperasiUsaha.value = "";
            console.log("Test beroperasi berhasil");
        }
    });

	$(".custom-file-input").on("change", function () {
		let fileName = $(this).val().split("\\").pop();
		$(this).next(".custom-file-label").addClass("selected").html(fileName);
		console.log(fileName);
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
