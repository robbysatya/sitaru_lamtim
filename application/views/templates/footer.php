<!-- ======= Footer ======= -->
<footer id="footer">

  <!-- <div class="footer-newsletter">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<h4>Join Our Newsletter</h4>
				<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
				<form action="" method="post">
					<input type="email" name="email"><input type="submit" value="Subscribe">
				</form>
			</div>
		</div>
	</div>
</div> -->

  <div class="footer-top" style="background-color: #f6f9fe;">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Sitaru - Lampung Timur<span>.</span></h3>
          <p>
            (Dinas PUPR) Sukadana Ilir, Kec. Sukadana, <br>
            Kabupaten Lampung Timur,<br>
            Lampung 34194.
          </p>
        </div>

        <!-- <div class="col-lg-3 col-md-6 footer-links">
				<h4>Useful Links</h4>
				<ul>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
				</ul>
			</div>

			<div class="col-lg-3 col-md-6 footer-links">
				<h4>Our Services</h4>
				<ul>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
					<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
				</ul>
			</div> -->

        <!-- <div class="col-lg-3 col-md-6 footer-links">
				<h4>Our Social Networks</h4>
				<p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
				<div class="social-links mt-3">
					<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
					<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
					<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
					<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
					<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				</div>
			</div> -->

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Sitaru Lampung Timur <?= date('Y')  ?></span></strong>. All Rights Reserved
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url('assets/') ?>vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?= base_url('assets/') ?>vendor/aos/aos.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?= base_url('assets/') ?>vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url('assets/') ?>js/main.js"></script>
<!-- jQuery -->
<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url('assets/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?= base_url('assets/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?= base_url('assets/') ?>plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?= base_url('assets/') ?>plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>


<!-- Page specific script -->
<script>
$('.custom-file-input').on('change', function() {
  let fileName = $(this).val().split('\\').pop();
  $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

// $(function() {
// 	$.validator.setDefaults({
// 		submitHandler: function() {
// 			alert("Form successful submitted!");
// 		}
// 	});
// 	$('#quickForm').validate({
// 		rules: {
// 			nik: {
// 				required: true,
// 			},
// 			password: {
// 				required: true,
// 				minlength: 5
// 			},
// 			terms: {
// 				required: true
// 			},
// 		},
// 		messages: {
// 			nik: {
// 				required: "NIK Tidak Boleh Kosong"
// 			},
// 			password: {
// 				required: "Please provide a password",
// 				minlength: "Your password must be at least 5 characters long"
// 			},
// 			terms: "Please accept our terms"
// 		},
// 		errorElement: 'span',
// 		errorPlacement: function(error, element) {
// 			error.addClass('invalid-feedback');
// 			element.closest('.form-group').append(error);
// 		},
// 		highlight: function(element, errorClass, validClass) {
// 			$(element).addClass('is-invalid');
// 		},
// 		unhighlight: function(element, errorClass, validClass) {
// 			$(element).removeClass('is-invalid');
// 		}
// 	});
// });

$(async function() {
  //Initialize Select2 Elements

  // SELECT KECAMATAN
  var urlKecamatan = "https://ibnux.github.io/data-indonesia/kecamatan/1807.json";
  var urlKelurahan = "https://ibnux.github.io/data-indonesia/kelurahan/";

  function clearOptions(nama) {
    $('#' + nama).empty().trigger('change');
  }
  var resData = [];
  await $.getJSON(urlKecamatan, function(res) {

    res2 = $.map(res, function(obj) {
      obj.text = obj.nama
      obj.nama = obj.id
      return obj;
    });
    resData = resData.concat(res2);
    res = $.map(res, function(obj) {
      obj.id = obj.text
      return obj;
    });

    data = [{
      id: "",
      nama: "- Pilih Kecamatan -",
      text: "- Pilih Kecamatan -"
    }].concat(res);

    //implemen data ke select kecamatan
    $(".kecamatan").select2({
      dropdownAutoWidth: true,
      width: '100%',
      data: data
    })
  });

  var selectKec = $('.kecamatan');
  $(selectKec).change(function() {
    var value = $(selectKec).val();
    for (let i = 0; i < resData.length; i++) {
      if (resData[i].id === value) {
        value = resData[i].nama
      }
    }
    clearOptions('kecamatan');

    if (value) {
      var text = $('.kecamatan :selected').text();
      $.getJSON(urlKelurahan + value + ".json", function(res) {

        res = $.map(res, function(obj) {
          obj.id = obj.nama
          obj.text = obj.nama
          return obj;
        });

        data = [{
          id: "",
          nama: "- Pilih Kelurahan -",
          text: "- Pilih Kelurahan -"
        }].concat(res);

        //implemen data ke select provinsi
        $(".kelurahan").select2({
          dropdownAutoWidth: true,
          width: '100%',
          data: data
        })
      })
    }
  });

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', {
    'placeholder': 'dd/mm/yyyy'
  })
  //Datemask2 mm/dd/yyyy
  $('#datemask2').inputmask('mm/dd/yyyy', {
    'placeholder': 'mm/dd/yyyy'
  })
  //Money Euro
  $('[data-mask]').inputmask()

  //Date picker
  $('#reservationdate').datetimepicker({
    format: 'L'
  });

  //Date and time picker
  $('#reservationdatetime').datetimepicker({
    icons: {
      time: 'far fa-clock'
    }
  });

  //Date range picker
  $('#reservation').daterangepicker()
  //Date range picker with time picker
  $('#reservationtime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
      format: 'MM/DD/YYYY hh:mm A'
    }
  })
  //Date range as a button
  $('#daterange-btn').daterangepicker({
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
          'month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
    }
  )

  //Timepicker
  $('#timepicker').datetimepicker({
    format: 'LT'
  })

  //Bootstrap Duallistbox
  $('.duallistbox').bootstrapDualListbox()

  //Colorpicker
  $('.my-colorpicker1').colorpicker()
  //color picker with addon
  $('.my-colorpicker2').colorpicker()

  $('.my-colorpicker2').on('colorpickerChange', function(event) {
    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
  })

  $("input[data-bootstrap-switch]").each(function() {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
  })
})

var stepper1
var stepper2
var stepper3
var stepper4
var stepperForm
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function() {
  window.stepper = new Stepper(document.querySelector('.bs-stepper'))

  stepper1 = new Stepper(document.querySelector('#stepper1'))
  stepper2 = new Stepper(document.querySelector('#stepper2'), {
    linear: false
  })
  stepper3 = new Stepper(document.querySelector('#stepper3'), {
    linear: false,
    animation: true
  })
  stepper4 = new Stepper(document.querySelector('#stepper4'))

  var stepperFormEl = document.querySelector('#stepperForm')
  stepperForm = new Stepper(stepperFormEl, {
    animation: true
  })

  var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
  var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
  var inputNikForm = document.getElementById('nik')
  var inpuNamaForm = document.getElementById('nama')
  var form = stepperFormEl.querySelector('.bs-stepper-content form')

  btnNextList.forEach(function(btn) {
    btn.addEventListener('click', function() {
      stepperForm.next()
    })
  })

  stepperFormEl.addEventListener('show.bs-stepper', function(event) {
    form.classList.remove('was-validated')
    var nextStep = event.detail.indexStep
    var currentStep = nextStep

    if (currentStep > 0) {
      currentStep--
    }

    var stepperPan = stepperPanList[currentStep]

    if ((stepperPan.getAttribute('id') === 'pemohon-part' && !inputNikForm.value.length) ||
      (stepperPan.getAttribute('id') === 'test-form-2' && !inpuNamaForm.value.length)) {
      event.preventDefault()
      form.classList.add('was-validated')
    }
  })
})

// DropzoneJS Demo Code Start
Dropzone.autoDiscover = false

// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
var previewNode = document.querySelector("#template")
previewNode.id = ""
var previewTemplate = previewNode.parentNode.innerHTML
previewNode.parentNode.removeChild(previewNode)

var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
  url: "/target-url", // Set the url
  thumbnailWidth: 80,
  thumbnailHeight: 80,
  parallelUploads: 20,
  previewTemplate: previewTemplate,
  autoQueue: false, // Make sure the files aren't queued until manually added
  previewsContainer: "#previews", // Define the container to display the previews
  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
})

myDropzone.on("addedfile", function(file) {
  // Hookup the start button
  file.previewElement.querySelector(".start").onclick = function() {
    myDropzone.enqueueFile(file)
  }
})

// Update the total progress bar
myDropzone.on("totaluploadprogress", function(progress) {
  document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
})

myDropzone.on("sending", function(file) {
  // Show the total progress bar when upload starts
  document.querySelector("#total-progress").style.opacity = "1"
  // And disable the start button
  file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
})

// Hide the total progress bar when nothing's uploading anymore
myDropzone.on("queuecomplete", function(progress) {
  document.querySelector("#total-progress").style.opacity = "0"
})

// Setup the buttons for all transfers
// The "add files" button doesn't need to be setup because the config
// `clickable` has already been specified.
document.querySelector("#actions .start").onclick = function() {
  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
}
document.querySelector("#actions .cancel").onclick = function() {
  myDropzone.removeAllFiles(true)
}
// DropzoneJS Demo Code End
</script>

</body>
































































































</html>