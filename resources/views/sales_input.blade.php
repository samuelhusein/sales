<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Management System</title>
    <!-- <title>@yield('title','title')</title> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            background-color: #ddd;
            font-family: halvetica, arial, helvetica;
        }
        label{
            font-weight: bold;
            height: 20px;
            margin-top: 10px;
            margin-left: 0px;
            text-align: right;
            margin-right:15px;
        }
        input {
        border: 1px solid #000;
        margin-bottom: 10px;
        }
        .header{
            text-align: center;
        }
        .tab {
        overflow: hidden;
        }

        .tab button {
        background-color: inherit;
        float: left;
        border: 1px solid;
        outline: none;
        cursor: pointer;
        padding: 7px 16px;
        transition: 0.3s;
        }
        .tab button:hover {
        background-color: #fff;
        }
        .tab button.active {
        border: 1px solid ;
        background-color: #fff;
        }
        .tabcontent {
        background-color: #fff;
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
        max-width: 100%;
        }
        .inline{
            display: inline-block;
        }

        .space{
            margin-top:10px;
            width: 250px;
        }
        .small-space{
            width: 100px;
        }
        .text-area {
        width: 100%;
        overflow: hidden;
        }
        textarea{
            width: 100%;
        }
        .col-10{
            width: 100%;
        }
        .col-8{
            width: 80%;
        }
        .col-6{
            width: 60%;
        }
        .col-4{
            width: 40%;
        }
        .col-2{
            width: 20%;
        }
        .btn{
            width: 80px;
            height: 40px;
            font-size: 15px;
        }
        .fa-close{
            color: #FF0000;
        }
        select{
            min-width: 175px;
            background-color:#ddd;
        }
        .pad{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1 class="header">Sales</h1>

    <div class="content">
        <div class="col-10">

            <div class="col-10">
                <div class="inline space">
                <label for="nama_lengkap">Nama Lengkap</label>
                </div>
                <div class="inline">
                <input type="text" name="nama_lengkap" id="nama_lengkap" style="width:100%">
                </div>
            </div>

            <div class="col-10">
                <div class="inline space">
                    <label for="tempat_lahir">Tempat / Tgl Lahir</label>
                </div>
                <div class="inline">
                    <input type="text" name="tempat_lahir" id="tempat Lahir">
                    <span class="divider" style="margin:0px 20px 0px 20px;">/</span>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                </div>
            </div>

            <div class="col-10">
                <div class="inline space">
                    <label for="nama_lengkap">Identitas</label>
                </div>
                <div class="inline"style="margin-right:100px;">
                    <select name="identitas" id="identitas">
                        <option value="KTP">KTP</option>
                        <option value="SIM">SIM</option>
                        <option value="PASPORT">PASPORT</option>
                    </select> 
                </div>
                <div class="inline space">
                    <label for="nama_lengkap">No.Identitas</label>
                </div>
                    <input type="text" name="no_identitas" id="no_identitas">
            </div>

            <div class="col-10">
                    <div class="inline space">
                        <label for="kode_sales">Kode Sales</label>
                    </div>
                    <input type="text" name="kode_sales" id="kode_sales">
            </div>

            <div class="alamat" style="margin-top:30px;">
                <!-- Tab button -->
                <div class="tab">
                    <button class="tablinks" onclick="openTab(event, 'identitasTab')" id="defaultOpen" style="font-weight: bold;">Alamat Identitas</button>
                    <button class="tablinks" onclick="openTab(event, 'domisiliTab')" style="font-weight: bold;">Alamat Domisili</button>
                </div>

                <!-- Tab content -->
                <div id="identitasTab" class="tabcontent">
                <div class="col-10 inline">
                <div class="inline small-space" style="vertical-align:top;">
                <label for="identitas_alamat">Alamat</label>
                </div>
                <div class="inline">
                <textarea name="identitas_alamat" class="text-area" id="identitas_alamat" cols="180"rows="10"></textarea>

                </div>
                <div class="col-4 inline" style="vertical-align:top; margin-top:10px;">
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="identitas_provinsi">Provinsi</label>
                        </div>
                        <div class="inline">
                            <select name="identitas_provinsi" id="identitas_provinsi" data-tujuan ="identitas_kota" onchange="getKota(this)">
                            </select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="identitas_kota">Kota</label>
                        </div>  
                        <div class="inline">
                            <select name="identitas_kota" id="identitas_kota" data-tujuan ="identitas_kecamatan" onchange="getKecamatan(this)"></select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="identitas_kecamatan">Kecamatan</label>
                        </div>
                        <div class="inline">
                            <select name="identitas_kecamatan" id="identitas_kecamatan" data-tujuan ="identitas_kelurahan" onchange="getKelurahan(this)"></select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                        <div class="inline">
                            <label for="identitas_kelurahan">Kelurahan</label>
                        </div>
                        </div>
                            <select name="identitas_kelurahan" id="identitas_kelurahan"></select>
                        </div>
                </div>
                </div>
               

                <div class="col-10">
                        <div class="col-2 inline">
                        <div class="inline small-space">
                            <label for="identitas_rt">RT</label>
                        </div>
                        <div class="inline">
                            <input type="text" name="identitas_rt" id="identitas_rt" maxlength="3" style="width:40px;">
                        </div>
                        </div>

                        <div class="col-2 inline">
                        <div class="inline small-space">
                            <label for="identitas_rw">RW</label>
                        </div>
                        <div class="inline">
                            <input type="text" name="identitas_rw" id="identitas_rw" maxlength="3" style="width:40px;">
                        </div>
                        </div>
                </div>

                </div>

                <div id="domisiliTab" class="tabcontent">
                <div class="col-10 inline">
                <div class="inline small-space" style="vertical-align:top;">
                <label for="domisili_alamat">Alamat</label>
                </div>
                <div class="inline">
                <textarea name="domisili_alamat" class="text-area" id="domisili_alamat" cols="180"rows="10"></textarea>
                
                </div>
                <div class="col-4 inline" style="vertical-align:top; margin-top:10px;">
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="domisili_provinsi">Provinsi</label>
                        </div>
                        <div class="inline">
                            <select name="domisili_provinsi" id="domisili_provinsi" data-tujuan ="domisili_kota" onchange="getKota(this)"></select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="domisili_kota">Kota</label>
                        </div>  
                        <div class="inline">
                            <select name="domisili_kota" id="domisili_kota" data-tujuan ="domisili_kecamatan" onchange="getKecamatan(this)"></select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                            <label for="domisili_kecamatan">Kecamatan</label>
                        </div>
                        <div class="inline">
                            <select name="domisili_kecamatan" id="domisili_kecamatan" data-tujuan ="domisili_kelurahan" onchange="getKelurahan(this)"></select>
                        </div>
                    </div>
                    <div class="col-10 pad">
                        <div class="inline small-space">
                        <div class="inline">
                            <label for="domisili_kelurahan">Kelurahan</label>
                        </div>
                        </div>
                            <select name="domisili_kelurahan" id="domisili_kelurahan"></select>
                        </div>
                </div>
                </div>

                    <div class="col-10">
                        <div class="col-2 inline">
                        <div class="inline small-space">
                            <label for="domisili_rt">RT</label>
                        </div>
                        <div class="inline">
                            <input type="text" name="domisili_rt" id="domisili_rt" maxlength="3" style="width:40px;">
                        </div>
                        </div>

                        <div class="col-2 inline">
                        <div class="inline small-space">
                            <label for="domisili_rw">RW</label>
                        </div>
                        <div class="inline">
                            <input type="text" name="domisili_rw" id="domisili_rw" maxlength="3" style="width:40px;">
                        </div>
                        </div>
                </div>

                <div class="col-10">
                    <input type="checkbox" id="identitas_copy" onclick="copy()"> 
                    <label for="identitas_copy">Sama dengan domisili</label>
                </div>
                </div>
            </div>

            <div class="col-10" >
            <div class="inline space">
                    <label for="no_telp">No.Telp</label>
            </div>
            <div class="inline" style="margin-right:100px;">
                    <input type="text" name="no_telp" id="no_telp">
            </div>
            <div class="inline space">
                    <label for="no_hp">No.HP</label>
            </div>
            <div class="inline">
                    <input type="text" name="no_hp" id="no_hp">
            </div>
            </div>

            <div class="col-10">
            <div class="inline space">
                    <label for="kelompok">Kelompok</label>
            </div>
                <div class="inline" style="margin-right:100px;">
                    <select name="kelompok" id="kelompok">
                    <option value="Counter">Counter</option>
                    <option value="Sales">Sales</option>
                    <option value="Manager">Manager</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Broker">Broker</option>
                    </select>
                </div>
                    <div class ="inline">
                    <div class="inline space">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                    </div>
                        <div class="inline" style="margin-right:200px;">
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk">
                        </div>
                    </div>
                    <div class ="inline space">
                        <label for="tanggal_keluar">Tanggal Keluar</label>
                    </div>
                        <div class="inline" style="margin-right:150px;">
                        <input type="date" name="tanggal_keluar" id="tanggal_keluar">
                        </div>
                </div>
            </div>

            <div class="col-10" style="text-align:center; margin-top:50px;"> 
                <button type="submit" class="btn" id="save"><i class="fa fa-save"></i> Save</button> <button type="reset" class="btn" id="close"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
        
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        document.getElementById("defaultOpen").click();

        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";
            }

            function copy() {
                document.getElementById("domisili_alamat").value = document.getElementById("identitas_alamat").value;
                document.getElementById("domisili_rt").value = document.getElementById("identitas_rt").value;
                document.getElementById("domisili_rw").value = document.getElementById("identitas_rw").value;

                setOption(document.getElementById("domisili_provinsi"),document.getElementById("identitas_provinsi").value);
            }

            function setOption(selectElement, value) {
            return [...selectElement.options].some((option, index) => {
                if (option.value == value) {
                    selectElement.selectedIndex = index;
                    return true;
                        }
                    });
                }

            $("#identitas_provinsi").ready(function () {
                getProvinsi($("#identitas_provinsi"));
                getProvinsi($("#domisili_provinsi"));
            });
            async function getProvinsi(obj){
                const response= await fetch('https://dev.farizdotid.com/api/daerahindonesia/provinsi')
                const data= await response.json();
                length=data.provinsi.length;
                var temp="";
                temp+='<option selected disabled>---Pilih Provinsi---</option>'
                for(i=0;i<length;i++)
                {
                    temp+="<option value='"+data.provinsi[i].id+"'>"+data.provinsi[i].nama+"</option>";
                }
                $(obj).html(temp);  
            }   
            async function getKota(obj){
                var e = obj;
                var id= e.options[e.selectedIndex].value;
                const response= await fetch('https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='+id);
                const data= await response.json();
                length=data.kota_kabupaten.length;
                var temp="";
                for(i=0;i<length;i++)
                {
                    temp+="<option value='"+data.kota_kabupaten[i].id+"'>"+data.kota_kabupaten[i].nama+"</option>";
                }
                var tujuan ='#'+$(obj).data('tujuan');
                $(tujuan).html(temp);    
            } 
            
            async function getKecamatan(obj){
                var e = obj;
                var id= e.options[e.selectedIndex].value;
                const response= await fetch('https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='+id);
                const data= await response.json();
                length=data.kecamatan.length;
                var temp="";
                for(i=0;i<length;i++)
                {
                    temp+="<option value='"+data.kecamatan[i].id+"'>"+data.kecamatan[i].nama+"</option>";
                }
                console.log(temp)
                var tujuan ='#'+$(obj).data('tujuan');
                $(tujuan).html(temp);    
            }

            async function getKelurahan(obj){
                var e = obj;
                var id= e.options[e.selectedIndex].value;
                const response= await fetch('https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='+id);
                const data= await response.json();
                length=data.kelurahan.length;
                var temp="";
                for(i=0;i<length;i++)
                {
                    temp+="<option value='"+data.kelurahan[i].id+"'>"+data.kelurahan[i].nama+"</option>";
                }
                console.log(temp)
                var tujuan ='#'+$(obj).data('tujuan');
                $(tujuan).html(temp);    
            }
    </script>
</body>
</html>
