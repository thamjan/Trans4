<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Nova ponuda robe</h2>
        <form id="formNewOffer" method="post" action="">
            <table>
                <tr>
                    <td>
                        <label>Tip ponude</label>
                    </td>
                    <td>
                        <select id="slOfferType">
                            <option value=""></option>
                            <option value="cargo">Roba</option>
                            <option value="truck">Prazan kamion</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Početna adresa</label>
                    </td>
                    <td>
                        <input type="text" id="txtStartAdress" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Odredišna adresa</label>
                    </td>
                    <td>
                        <input type="text" id="txtDestinationAdress" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Dimenzije</label>
                    </td>
                    <td>
                        <label>Dužina</label>
                        <input type="text" id="txtLength" />
                        <label>Širina</label>
                        <input type="text" id="txtWidth" />
                        <label>Visina</label>
                        <input type="text" id="txtHeight" />
                    </td>
                </tr>
                <label>Početna adresa</label>
                <tr>
                    <td>
                        <label>Tip/materijal robe</label>
                    </td>
                    <td>
                        <select id="slCartgoType">
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
                        <input type="file" id='filePhotos' />
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                </tr>
                <input type="text" id="txtStartAdress" />
            </table>
        </form>
        <?php
        // put your code here
        ?>

    </body>
</html>
