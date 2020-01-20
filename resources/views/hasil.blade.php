<?
 if(isset($_POST['hasil'])){
            $pilihan=$_POST["pilihan"];
            $id=$_POST["id"];
            $jumlah=$_POST['jumlah'];

            $score=0;
            $benar=0;
            $salah=0;
            $kosong=0;

            for ($i=0;$i<$jumlah;$i++){
                //id nomor soal
                $no=$id[$i];

                //jika user tidak memilih jawaban
                if (empty($pilihan[$no])){
                    $kosong++;
                }else{
                    //jawaban dari user
                    $jawaban=$pilihan[$no];

                    //cocokan jawaban user dengan jawaban di database
                    $query=mysql_query("($data_soal as $soal) where id='$no' and kunci_jawaban='$jawaban'");

                    $cek=($soal->$query);

                    if($cek){
                        //jika jawaban cocok (benar)
                        $benar++;
                    }else{
                        //jika salah
                        $salah++;
                    }

                }
                /*RUMUS
                Jika anda ingin mendapatkan Nilai 100, berapapun jumlah soal yang ditampilkan
                hasil= 100 / jumlah soal * jawaban yang benar
                */

                $result=mysql_query("($data_soal as $soal) WHERE aktif='Y'");
                $jumlah_soal=mysql_num_rows($result);
                $score = 100/$jumlah_soal*$benar;
                $hasil = number_format($score,1);
            }
        }

        //Lakukan Penyimpanan Kedalam Data echo "$benar,$salah,$kosong";


?>
