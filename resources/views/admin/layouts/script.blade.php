<!-- jQuery -->
<script src="{{ asset('template/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/admin/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/admin/dist/js/demo.js') }}"></script>

<script src="{{ asset('template/admin/dist/js/slug.js') }}"></script>

{{-- <script type="text/javascript">
    $(".js-preview-transaction").click(function(event) {
        event.preventDefault();
        let $this = $(this);
        let URL = $this.attr('href');
        $.ajax({
                url: "URL",
            })
            .done(function(results) {
                console.log(results);
                $("modal-preview-transaction .content").html(results.html)
            });
        console.log("111")
    });
    })
</script> --}}
