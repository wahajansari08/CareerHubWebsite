            <!-- Footer -->
            <footer class="bg-light text-center py-3 border-top">
                <p class="mb-0">© 2025 Career Hub. All rights reserved.</p>
            </footer>
        </div>
    </div>
<!-- Scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        // Toggle Sidebar
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('toggled');
        });
		
		    ClassicEditor
        .create( document.querySelector( '#content' ),{
          ckfinder:
          {
            uploadUrl: 'fileupload.php'
          }
        })
        .then(editor => {
          console.log(editor);
        })
        .catch( error => {
            console.error( error );
        });
		let table = new DataTable('#myTable');
    </script>
</body>
</html>