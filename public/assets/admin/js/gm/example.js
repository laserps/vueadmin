var Examples = (function () {
  var handleTables = function () {
    $('#example').DataTable({
      "responsive": true,
      "serverSide": true,
      "processing": true,
      "ajax": rurl + '/admin/example_dt/',
      "columns": [{
          "data": 'DT_RowIndex',
          "name": 'DT_RowIndex',
          orderable: false,
          searchable: false
        },
        {
          "data": "field_1",
          "name": "examples.field_1"
        },
        {
          "data": "field_2",
          "name": "examples.field_2"
        },
        {
          "data": "field_3",
          "name": "examples.field_3"
        },
        {
          "data": "field_4",
          "name": "examples.field_4"
        },
        {
          "data": "created_by",
          "name": "examples.created_by"
        },
        {
          "data": "action",
          orderable: false,
          searchable: false
        }
      ],

    });
  }

  var handleValidation = function () {
    // for more info visit the official plugin documentation:
    // http://docs.jquery.com/Plugins/Validation
    var form = $('#validateForm')
    form.validate({
      errorElement: 'span', // default input error message container
      errorClass: 'help-block help-block-error', // default input error message class
      focusInvalid: false, // do not focus the last invalid input
      ignore: '', // validate all fields including form hidden input
      rules: {
        field_1: {
          required: true
        },
        field_2: {
          required: true
        },
        field_3: {
          required: true
        },
        field_4: {
          required: true
        },
        created_by: {
          required: true
        },

      },

      highlight: function (element) { // hightlight error inputs
        $(element)
          .closest('.form-group .form-control').addClass('is-invalid') // set invalid class to the control group
      },
      unhighlight: function (element) { // revert the change done by hightlight
        $(element)
          .closest('.form-group .form-control').removeClass('is-invalid') // set invalid class to the control group
          .closest('.form-group .form-control').addClass('is-valid')
      },
      errorPlacement: function (error, element) {
        if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
          error.insertAfter(element.parent())
        } else {
          error.insertAfter(element)
        }
      },
      success: function (label) {
        label
          .closest('.form-group .form-control').removeClass('is-invalid') // set success class to the control group
      }
    })
  }

  var handleConfirmation = function () {
    $('[data-confirmation="notie"]').on('click', function () {
      $this = $(this)
      notie.confirm('Are you sure?', 'Yes! Delete this User', 'Cancel', function () {
        deleteUser($this)
      })
      return false
    })
  }

  var deleteUser = function ($this) {
    var url = $this.attr('href')
    var token = $this.data('token')
    console.log(url)
    $.ajax({
      type: 'POST',
      data: {
        _method: 'delete',
        _token: token
      },
      url: url,
      success: function (data) {
        toastr['success']('User Deleted', 'Success')
        Window.setTimeout('location.reload()', 500)
      },
      error: function (data) {
        toastr['error']('There was an error', 'Error')
      }
    })
  }

  return {
    // main function to initiate the module
    init: function () {
      handleTables()
      handleConfirmation()
      handleValidation()
    }
  }
})()

jQuery(document).ready(function () {
  Examples.init()
})