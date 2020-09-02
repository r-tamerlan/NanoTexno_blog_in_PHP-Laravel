<script src="{{ asset('admin_app-assetc/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/assets/js/app.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/highlight/highlight.pack.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="{{ asset('admin_app-assetc/assets/js/custom.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/assets/js/dashboard/dash_1.js') }}"></script>

<script src="{{ asset('admin_app-assetc/assets/js/scrollspyNav.js') }}"></script>
<script>
    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()
</script>
<script src="/js/app.js"></script>

<script src="{{ asset('admin_app-assetc/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>

{{--<script>--}}
{{--    //First upload--}}
{{--    var firstUpload = new FileUploadWithPreview('myFirstImage')--}}
{{--</script>--}}

<script>
    var ss = $(".basic").select2({
        tags: true,
    });
</script>

<script src="{{ asset('admin_app-assetc/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/select2/custom-select2.js') }}"></script>

<script src="{{ asset('admin_app-assetc/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>
<script src="{{ asset('admin_app-assetc/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('admin_app-assetc/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script>
    $('.widget-content .warning.confirm').on('click', function () {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function(result) {
            if (result.value) {
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
                {{--$.ajax({--}}
                {{--    url:{{ route('admin.categories.edit'}},--}}
                {{--    type: 'get',--}}
                {{--    data: {{$categoryList->id}}--}}

                {{--})--}}
            }
        })
    })
</script>
