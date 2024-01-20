</main>
<footer class="bg-light shadow-sm">
    <div class="text-center fixed-bottom p-3">
        <p style="margin-bottom: 0">Copyright &copy; <a href="https://github.com/Fadlyzz" target="_blank" style=" text-decoration: none; color: black;"> Fadlyzz </a> 2024</p>
        <p style="margin-bottom: 0"><a href="https://polibang.ac.id" target="_blank" style=" text-decoration: none; color:black;"> Politeknik Balekambang Jepara</a></p>
    </div>
</footer>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for (let i = 0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 200,
            toolbar: [
                ["style", ["bold", "italic", "underline", "clear"]],
                ["fontname", ["fontname"]],
                ["fontsize", ["fontsize"]],
                ["color", ["color"]],
                ["para", ["ul", "ol", "paragraph"]],
                ["height", ["height"]],
                ["insert", ["link", "picture", "imageList", "video", "hr"]],
                ["help", ["help"]]
            ],
            dialogsInBody: true,
            imageList: {
                endpoint: "daftar_gambar.php",
                fullUrlPrefix: "../gambar/",
                thumbUrlPrefix: "../gambar/"
            }
        });

        $.upload = function(file) {
            let out = new FormData();
            out.append('file', file, file.name);

            $.ajax({
                method: 'POST',
                url: 'upload_gambar.php',
                contentType: false,
                cache: false,
                processData: false,
                data: out,
                success: function(img) {
                    $('#summernote').summernote('insertImage', img);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus + " " + errorThrown);
                }
            });
        };
    });
</script>
</body>

</html>