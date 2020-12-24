<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sertifikat Input</title>
    <link href="https://fonts.googleapis.com/css?family=Grenze|Marck+Script|Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/sertif/') ?>style.css">
    <script src="<?= base_url('assets/sertif/') ?>app.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="app">
        <div class="container">

            <div class="inputContainer no-print">
                <input type="text" v-model="namaPeserta" placeholder="Masukkan Nama Peserta" @keyup.enter="download('jpg')">
                <!-- <input type="submit" value="Download PDF" @click="download('pdf')"> -->
                <input type="submit" value="Export PNG" @click="download('jpg')">
                <!-- <br><br>
			<input type="text" v-model="namaPenyelenggara" placeholder="NamaPenyelenggara">
			<input type="text" v-model="jabatanPenyelenggara" placeholder="Jabatan Penyelenggara">
			<input type="text" v-model="nomorIdentitasPenyelenggara" placeholder="Nip/Nim Penyelenggara">
			<input type="submit" value="Tambah Penyelenggara" @click="addPenyelenggara(namaPenyelenggara, jabatanPenyelenggara, nomorIdentitasPenyelenggara)"> -->
                <p>{{message}}</p>
            </div>

            <div class="sertifikat" id="capture">
                <div class="logoContainer">
                    <img crossorigin="anonymous" src="https://raw.githubusercontent.com/rdfariz/sertifikat-input/master/img/TEL_U.png" alt="">
                    <img crossorigin="anonymous" src="https://raw.githubusercontent.com/rdfariz/sertifikat-input/master/img/BEM_KEMA.png" alt="">
                    <img crossorigin="anonymous" src="https://raw.githubusercontent.com/rdfariz/sertifikat-input/master/img/CTLE.png" style="width: auto; height: 50px; margin-left: 16px; margin-top: 10px;" alt="">
                </div>

                <div class="titleSertifikat" style="margin-top: -15px">
                    <span class="title">Sertifikat</span>
                    <span class="subtitle">Diberikan Kepada:</span>
                </div>

                <div class="contentSertifikat">
                    <span class="titleName">{{namaPeserta}}</span><br>
                    <span class="subtitle">Atas partisipasinya sebagai:</span>
                    <span class="titleName" style="font-size: 40pt;">Peserta</span><br>
                    <!-- <div class="hr"></div> -->
                    <span class="subtitle">Dalam acara Seminar Nasional Dengan Tema<br>Research Corner "Jurus Jitu
                        Belajar Efektif di Perguruan Tinggi"<br>Bandung 20 September 2019</span>
                </div>

                <span style="margin-top: 50px;" class="subtitle">Mengetahui: </span>
                <br>

                <div class="ttdSertifikat">
                    <div class="ttdContent" v-for="(penyelenggara, index) in mengetahui">
                        <b>
                            <span class="subtitle" v-html="penyelenggara.jabatan"></span>
                            <div class="space"></div>
                            <span class="subtitleName">{{penyelenggara.nama}}
                                <hr>{{penyelenggara.nomorIdentitas}}
                            </span>
                        </b>
                    </div>
                </div>

                <img class="bgImage" src="https://raw.githubusercontent.com/rdfariz/sertifikat-input/master/img/BG.jpg" alt="">

            </div>

            <div class="no-print">
                <div>
                    <h1>{{status}}</h1>
                </div>
                <div id="elementH"></div>
            </div>

        </div>
    </div>
    <script>
        new Vue({
            el: '#app',
            data: {
                namaPeserta: '',
                namaPenyelenggara: '',
                jabatanPenyelenggara: '',
                nomorIdentitasPenyelenggara: '',
                mengetahui: [],
                status: '',
                message: '',
            },
            created() {
                this.addPenyelenggara("Direktorat Kemahasiswaan Telkom University", "Andijoko Tjahjono", "NIP.16671909-4")
                this.addPenyelenggara("Presiden Mahasiswa<br>BEM KEMA Telkom University", "Yusuf Sugiyarto", "NIM 1101154305")
                this.addPenyelenggara("Ketua<br>Pelaksana", "Astri Wulandari", "NIM 1101174148")
            },
            methods: {
                addPenyelenggara(jabatan, nama, nomorIdentitas) {
                    const data = {
                        jabatan: jabatan,
                        nama: nama,
                        nomorIdentitas: nomorIdentitas
                    }
                    this.mengetahui.push(data);
                    this.namaPenyelenggara = ''
                    this.jabatanPenyelenggara = ''
                    this.nomorIdentitasPenyelenggara = ''
                },
                saveAs(uri, filename) {
                    var link = document.createElement('a');
                    if (typeof link.download === 'string') {
                        link.href = uri;
                        link.download = filename;

                        //Firefox requires the link to be in the body
                        document.body.appendChild(link);

                        //simulate click
                        link.click();

                        //remove the link when done
                        document.body.removeChild(link);
                    } else {
                        window.open(uri);
                    }
                },
                download(format) {
                    if (this.namaPeserta == '') {
                        alert('Nama peserta ngga boleh kosong :(');
                    } else {
                        if (format == "pdf") {
                            // var doc = new jsPDF();
                            // var elementHTML = $('#canvasExport').html();
                            // var specialElementHandlers = {
                            // 	'#elementH': function (element, renderer) {
                            // 		return true;
                            // 	}
                            // };
                            // doc.fromHTML(elementHTML, 15, 15, {
                            // 	'width': 170,
                            // 	'elementHandlers': specialElementHandlers
                            // });

                            // // Save the PDF
                            // doc.save('sample-document.pdf');
                        } else {
                            this.status = "Export Image:";
                            this.message = "Loading...";
                            $("html").addClass("hide-scrollbar"); //hide scrollbar because it is showing left white padding
                            html2canvas(document.querySelector("#capture"), {
                                scale: 5,
                                useCORS: true,
                                allowTaint: true
                            }).then(canvas => {
                                // this.saveAs(canvas.toDataURL(), 'canvas.png');
                                document.querySelector("#elementH").innerHTML = ""
                                document.querySelector("#elementH").appendChild(canvas).setAttribute('class', 'no-print');
                                this.message = "Scroll kebawah ya, trs klik kanan save image as.."
                            });
                            $("html").removeClass("hide-scrollbar");
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>