<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!--<link rel="stylesheet" href="/resources/demos/style.css" />-->
        <script>
            $(function() {
                $("#dateAvailableFrom, #dateAvailableTo").datepicker();
            });
        </script>
        <script>
            $(document).ready(function() {
                $ok = false;
//                alert('$(document).ready(function(){');
                $slOfferType = $('#slOfferType');
                $sCargo = $('#sCargo');
                $sTruck = $('#sTruck');

                $sCargo.slideUp(1);
                $sTruck.slideUp(1);

                $slOfferType.change(function() {
                    if ($slOfferType.val() === 'cargo') {
//                        alert('cargo');
                    // temporary, change it!!! //
                    $ok = true;                //
                    ////////////////////////////
                        $sCargo.slideDown('slow');
                        $sTruck.slideUp('slow');
                    }
                    else if ($slOfferType.val() === 'truck') {
//                        alert('truck');
                        $sCargo.slideUp('slow');
                        $sTruck.slideDown('slow');
                    }
                    else {
                        $sCargo.slideUp('slow');
                        $sTruck.slideUp('slow');
                    }
                });

                $('#btnSubmit').click(function(event) {
                    event.preventDefault();
//                    alert('btnSubmit');
                    if ($ok === true) {
                        $('#formNewOffer').submit();
                    }
                    else {
                        alert('Popunite polja...');
                    }
                });
            });
        </script>
    </head>
    <body>
        <h2>Nova ponuda robe</h2>
        <form id="formNewOffer" method="post" action="logic/newOffer.php">
            <table>
                <tr>
                    <td>
                        <label>Tip ponude</label>
                    </td>
                    <td>
                        <select id="slOfferType" name='slOfferType'>
                            <option value=""></option>
                            <option value="cargo">Roba</option>
                            <option value="truck">Prazan kamion</option>
                        </select>
                        <button id='btnSubmit' name='btnSubmit'>Kreiraj</button>
                    </td>
                </tr>
            </table>
            <section id='sCargo'>
                <table>
                    <tr>
                        <td>
                            <label>Početna adresa</label>
                        </td>
                        <td>
                            <input type="text" id="txtStartAdress"  name='txtStartAdress'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Odredišna adresa</label>
                        </td>
                        <td>
                            <input type="text" id="txtDestinationAdress"  name='txtDestinationAdress'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Dimenzije</label>
                        </td>
                        <td>
                            <label>Dužina</label>
                            <input type="text" id="txtCargoLength"  name='txtCargoLength'/>
                            <label>Širina</label>
                            <input type="text" id="txtCargoWidth"  name='txtCargoWidth'/>
                            <label>Visina</label>
                            <input type="text" id="txtCargoHeight"  name='txtCargoHeight'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Težina</label>
                        </td>
                        <td>
                            <input type="text" id="txtCargoWeight"  name='txtCargoWeight'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tip/materijal robe</label>
                        </td>
                        <td>
                            <select id="slCartgoType" name='slCartgoType'>
                                <option value=""></option>
                                <option value="type1">Tip 1</option>
                                <option value="type2">Tip 2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Slike</label>
                        </td>
                        <td>
                            <input type="file" id='fileCargoPhotos'  name='fileCargoPhotos'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Budžet</label>
                        </td>
                        <td>
                            <input type="text" id="txtBudget"  name='txtBudget'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Napomene</label>
                        </td>
                        <td>
                            <textarea id='taCargoRemarks'  name='taCargoRemarks' cols="66" rows="6">
                            </textarea>
                        </td>
                    </tr>
                </table>
            </section>
            <section id='sTruck' name='sTruck'>
                <table>
                    <tr>
                        <td>
                            <label>Trenutna lokacija</label>
                        </td>
                        <td>
                            <input type="text" id="txtCurrentLocation"  name='txtCurrentLocation'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Tip vozila</label>
                        </td>
                        <td>
                            <select id="slTruckType" name='slTruckType'>
                                <option value=""></option>
                                <option value="type1">Tip 1</option>
                                <option value="type2">Tip 2</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Dimenzije</label>
                        </td>
                        <td>
                            <label>Dužina</label>
                            <input type="text" id="txtLength"  name='txtLength'/>
                            <label>Širina</label>
                            <input type="text" id="txtWidth"  name='txtWidth'/>
                            <label>Visina</label>
                            <input type="text" id="txtHeight"  name='txtHeight'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Nosivost</label>
                        </td>
                        <td>
                            <input type="text" id="txtTruckWeight"  name='txtTruckWeight'/>
                        </td>
                    </tr>
                    <tr>
                    <tr>
                        <td>
                            <label>Slike</label>
                        </td>
                        <td>
                            <input type="file" id='fileTruckPhotos'  name='fileTruckPhotos'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Vreme raspoloživosti</label>
                        </td>
                        <td>
                            <input type='text' id='dateAvailableFrom'  name='dateAvailableFrom'/>
                            <input type='text' id='dateAvailableTo'  name='dateAvailableTo'/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Napomene</label>
                        </td>
                        <td>
                            <textarea id='taTruckRemarks'  name='taTruckRemarks' cols="66" rows="6">
                            </textarea>
                        </td>
                    </tr>
                </table>
            </section>

        </form>
        <?php
        // put your code here
        ?>

    </body>
</html>
