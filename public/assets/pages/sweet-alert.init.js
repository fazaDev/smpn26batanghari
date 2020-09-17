/*
 Template Name: Lexa - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Sweet Alert init js
 */

!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    SweetAlert.prototype.init = function () {

        //Basic
        $('#sa-basic').on('click', function () {
            Swal.fire('Any fool can use a computer')
        });

        //A title with a text under
        $('#sa-title').click(function () {
            Swal.fire(
                'The Internet?',
                'That thing is still around?',
                'question'
            )
        });

        //Success Message
        $('#sa-success').click(function () {
            Swal.fire(
                {
                    title: 'Good job!',
                    text: 'You clicked the button!',
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: "#58db83",
                    cancelButtonColor: "#ec536c",
                }
            )
        });

        //themhocvien
        $('#hoanthanh-themhocvien').click(function () {
            Swal.fire(
                {
                    title: 'Thành Công!',
                    text: 'Bạn đã thêm Học Viên Tìm Hiểu mới!',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: "#58db83",
                    cancelButtonColor: "#ec536c",
                }
            )
        });

        //dangkyhoc
        $('#hoanthanh-dkhoc').click(function () {
            Swal.fire({
                title: "Xác Nhận Đăng Ký Học?",
                text: "Bạn chắc chắn nhập Chính Xác dữ liệu Đăng Ký của Học Viên!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Đúng, Đăng Ký Cho HV!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Thành Công!", "Đã hoàn thành Đăng Ký.", "success");
                }
            });
        });

        //dangkyhoc trang phanvan
        $('#hoanthanh-dkhoc-phanvan').click(function () {
            Swal.fire({
                title: "Xác Nhận Đăng Ký Học?",
                text: "Bạn chắc chắn nhập Chính Xác dữ liệu Đăng Ký của Học Viên!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Đúng, Đăng Ký Cho HV!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Thành Công!", "Đã hoàn thành Đăng Ký.", "success");
                }
            });
        });

        //hocvienhentest
        $('#hocvienhentest').click(function () {
            Swal.fire(
                {
                    title: 'Thành Công!',
                    text: 'Đã cập nhật lịch hẹn Test!',
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: "#58db83",
                    cancelButtonColor: "#ec536c",
                }
            )
        });

        //hocvienphanvan
        $('#hocvienphanvan').click(function () {
            Swal.fire({
                title: "Học Viên Phân Vân?",
                text: "Bạn chắc chắn chuyển HV qua DS Phân Vân!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Đúng, Chuyển HV!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Đã Chuyển HV!", "HV hiện đã có trong DS Phân Vân.", "success");
                }
            });
        });

        //hocvienkhongdentest
        $('#hocvienkhongdentest').click(function () {
            Swal.fire({
                title: "Xác Nhận, HV Không Đến Test?",
                text: "Bạn chắc chắn HV không đến Test!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Đúng, HV Không Đến!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Đã Cập Nhật HV!", "HV hiện đã chuyển lại DS Tìm Hiểu.", "success");
                }
            });
        });

        //thucdayhocvien
        $('#thucdayhocvien').click(function () {
            Swal.fire({
                title: "Hoàn Thành Thúc Đẩy?",
                text: "Bạn chắc chắn đã Thúc Đẩy Học Viên!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Đúng, Đã Liên Hệ Lại HV!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Thành Công!", "Đã cập nhật thông tin Học Viên.", "success");
                }
            });
        });


        //Warning Message
        $('#sa-warning').click(function () {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                confirmButtonText: "Yes, delete it!"
              }).then(function (result) {
                if (result.value) {
                  Swal.fire("Deleted!", "Your file has been deleted.", "success");
                }
            });
        });

        //Parameter
        $('#sa-params').click(function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
            }).then(function (result) {
                if (result.value) {
                    Swal.fire({
                      title: 'Deleted!',
                      text: 'Your file has been deleted.',
                      type: 'success'
                    })
                  } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                  ) {
                    Swal.fire({
                      title: 'Cancelled',
                      text: 'Your imaginary file is safe :)',
                      type: 'error'
                    })
                  }
            });
        });

        //Custom Image
        $('#sa-image').click(function () {
            Swal.fire({
                title: 'Sweet!',
                text: 'Modal with a custom image.',
                imageUrl: 'assets/images/logo.png',
                imageHeight: 26,
                animation: false
            })
        });

        //Auto Close Timer
        $('#sa-close').click(function () {
            let timerInterval
                Swal.fire({
                title: 'Auto close alert!',
                html: 'I will close in <strong></strong> seconds.',
                timer: 2000,
                onBeforeOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                    Swal.getContent().querySelector('strong')
                        .textContent = Swal.getTimerLeft()
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
                }).then((result) => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                    console.log('I was closed by the timer')
                }
            })
        });

        //custom html alert
        $('#custom-html-alert').click(function () {
            Swal.fire({
                title: '<i>HTML</i> <u>example</u>',
                type: 'info',
                html: 'You can use <b>bold text</b>, ' +
                '<a href="//themesdesign.in/">links</a> ' +
                'and other HTML tags',
                showCloseButton: true,
                showCancelButton: true,
                confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
                cancelButtonText: '<i class="fa fa-thumbs-down"></i>'
            })
        });

        //Custom width padding
        $('#custom-padding-width-alert').click(function () {
            Swal.fire({
                title: 'Custom width, padding, background.',
                width: 600,
                padding: 100,
                background: '#fff url(//subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/geometry.png)'
            })
        });

        //Ajax
        $('#ajax-alert').click(function () {
            Swal.fire({
                title: 'Submit email to run ajax request',
                input: 'email',
                showCancelButton: true,
                confirmButtonText: 'Submit',
                showLoaderOnConfirm: true,
                confirmButtonColor: "#58db83",
                cancelButtonColor: "#ec536c",
                preConfirm: function (email) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function () {
                            if (email === 'taken@example.com') {
                                reject('This email is already taken.')
                            } else {
                                resolve()
                            }
                        }, 2000)
                    })
                },
                allowOutsideClick: false
            }).then(function (email) {
                Swal.fire({
                    type: 'success',
                    title: 'Ajax request finished!',
                    html: 'Submitted email: ' + email
                })
            })
        });

        //chaining modal alert
        $('#chaining-alert-test').click(function () {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3', '4']
              }).queue([
                {
                  title: 'Question 1',
                  text: 'Chaining swal2 modals is easy'
                },
                'Question 2',
                'Question 3'
              ]).then((result) => {
                if (result.value) {
                  Swal.fire({
                    title: 'All done!',
                    html:
                      'Your answers: <pre><code>' +
                        JSON.stringify(result.value) +
                      '</code></pre>',
                    confirmButtonText: 'Lovely!'
                  })
                }
              })
        });

        //chaining modal alert
        $('#chaining-alert').click(function () {
            Swal.mixin({
                input: 'text',
                confirmButtonText: 'Next &rarr;',
                showCancelButton: true,
                progressSteps: ['1', '2', '3']
              }).queue([
                {
                  title: 'Question 1',
                  text: 'Chaining swal2 modals is easy'
                },
                'Question 2',
                'Question 3'
              ]).then((result) => {
                if (result.value) {
                  Swal.fire({
                    title: 'All done!',
                    html:
                      'Your answers: <pre><code>' +
                        JSON.stringify(result.value) +
                      '</code></pre>',
                    confirmButtonText: 'Lovely!'
                  })
                }
              })
        });

        //Danger
        $('#dynamic-alert').click(function () {
            swal.queue([{
                title: 'Your public IP',
                confirmButtonText: 'Show my public IP',
                text: 'Your public IP will be received ' +
                'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: function () {
                    return new Promise(function (resolve) {
                        $.get('https://api.ipify.org?format=json')
                            .done(function (data) {
                                swal.insertQueueStep(data.ip)
                                resolve()
                            })
                    })
                }
            }])
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);