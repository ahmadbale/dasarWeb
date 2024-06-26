<!DOCTYPE html>
<html>
    <head>
        <title>Form Input dengan Validasi</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h1>Form Input dengan Validasi</h1>
        <form id="myForm" method="POST" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama">
            <span id="nama-error" style="color: red;"></span>  
            <br>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email">
            <span id="email-error" style="color: red;"></span>
            <br>

            <input type="submit" value="Submit">
            </form>

            <script>
                $(document).ready(function(){
                    $("#myForm").submit(function(event){
                        var nama = $("#nama").val();
                        var email = $("#email").val();
                        var valid = true;
                        
                        if(nama === ""){
                            $("#nama-error").text("Nama harus diisi.");
                            valid = false;
                        } else {
                            $("#nama-error").text("");
                        }
                       
                       
                        if(email === ""){
                            $("#email-error").text("Email harus diisi.");
                            valid = false;
                        } else {
                            $("#email-error").text("");
                        }
                      

                        if (!valid){
                            (!event.preventDefault());
                            //menggentikan pengiriman form jika validasi gagal
                        }
                    }
                    );
                });
            </script>
    </body>
</html>