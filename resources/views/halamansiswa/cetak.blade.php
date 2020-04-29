<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    <style>
        .table {
            width: 80%;
        }

        .table,
        .th,
        .td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 5px;

        }
        .page-break { page-break-after: always; }
    </style>
</head>
<body style="font-size: 16px; line-height: 1.6;">
    <table>
        <tr>
            <td><img src="{{asset('dokumen/headersurat.png')}}" width="700px"></td>
        </tr>
        <tr>
            <td align="center">
                <u style="font-size: 35px">SURAT  KETERANGAN</u><br />Nomor : 421.5/131/SMKN7/2020
            </td>
        </tr>
        <tr>
            <td>
                Yang bertanda tangan dibawah ini Kepala Sekolah Menengah Kejuruan Negeri 7 Pontianak Kota Pontianak menerangkan bahwa :
            </td>
        </tr>
        <tr>
            <td>
                <table style="margin-left: 50px">
                    <tr>
                        <td>Nama</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$nama}}</td>
                    </tr>
                    <tr>
                        <td>Nomor Induk Siswa Nasional (NISN)</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$nisn}}</td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$jurusan}}</td>
                    </tr>
                    <tr>
                        <td>Tampat, Tanggal lahir</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>{{$ttl}}</td>
                    </tr>
                    <tr>
                        <td>Sekolah Asal</td>
                        <td style="padding-right: 20px; padding-left: 30px">:</td>
                        <td>SMK Negeri 7 Pontianak</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                Berdasarkan :<br />
                <ol>
                    <li>Undang Undang Nomor 20 Tahun 2003 tentang Sistim Pendidikan Nasional (Lembaran Negara Tahun 2003 Nomor 78, Tambahan Lembaran Negara Nomor 4301).</li>
                	<li>Surat Edaran Mendikbud Nomor 4 Tahun 2020, tentang Pelaksanaan Kebijakan Pendidikan dalam masa darurat penyebaran virus Corona (Covid-19),</li>
                    <li>Dan Hasil Rapat Dewan Guru tanggal 28 April 2020, dengan kriteria :</li>
                    <ol type="a">
                        <li>Mengikuti SELURUH pelajaran sesuai dengan KURIKULUM.</li>
                        <li>Kehadiran lebih dari 90%</li>
                        <li>Perilaku Siswa minimal BAIK.</li>
                        <li>Akhlak Siswa minimal BAIK.</li>
                    </ol>
                </ol>


Menerangkan bahwa yang namanya tercantum diatas dinyatakan:

            </td>
        </tr>
        <tr>
            <td><div style="font-size: 20px;border: solid; font-weight: bold; width: 300px; margin: auto; text-align: center">{{$keterangan}}</div></td>
        </tr>
        <tr>
            <td>
                <div style="position: absolute; right: 0px; width: 250px; padding: 10px; text-align: center">
                                    Pontianak, 2 Mei 2020<br/>
                                    Kepala SMK Negeri 7 Pontianak
                                    <br /><br /><br />
                                    <div style="border-bottom: 1px solid black;">ABRIYANDI, S.Pd, M.Si.</div>
                                    NIP. 19741009 199903 1 006

                </div>
            </td>
        </tr>
        <tr>
            <td style="padding-top: 120px">
                NB: <br />
                Bagi Siswa yang <b>Tidak Lulus</b> diberi<br>
                kesempatan mengulang Tahun Ajaran 2020/2021
            </td>
        </tr>
    </table>


</body>
</html>
