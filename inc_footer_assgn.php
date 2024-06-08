</main>
    <footer class="bg-light mt-5">
    <div class="text-center p-3" style="background: #CCCCCC">
        Coursify &copy; 2024
    </div>
</footer>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            callbacks: {
                onImageUpload: function(files) {
                    for(let i=0; i < files.length; i++) {
                        $.upload(files[i]);
                    }
                }
            },
            height: 300,
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
