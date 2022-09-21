<?php
echo "Nama lengkap:";
if (isset($_POST['n'])) {
echo $_POST['n'];
echo "<br>";
}
echo "Tempat lahir:";
if (isset($_POST['t'])) {
          echo $_POST['t'];
          echo "<br>";
          }
          echo "Tanggal lahir:";
          if (isset($_POST['tl'])) {
                    echo $_POST['tl'];
                    echo "<br>";
                              }
                              echo "Jenis kelamin:";
                    if (isset($_POST['sex'])) {
                              echo $_POST['sex'];
                              echo "<br>";
                              }
                              echo "Alamat:";
                              if (isset($_POST['almt'])) {
                                        echo $_POST['almt'];
                                        echo "<br>";
                                        }
                                        echo "Agama:";
                                        if (isset($_POST['agama'])) {
                                                  echo $_POST['agama'];
                                                  echo "<br>";
                                                  }

?>