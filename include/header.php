<div id="header">
    <div id="top">
        <div class="left">
            <p>Dobrodošli, <strong><?= @$_SESSION['ime'] ?></strong> [ <a href="odjava.php">odjava</a> ]</p>
        </div>
        <div class="right">
            <div class="align-right">
                <p>Poslednje logovanje: <strong>23-04-2012 23:12</strong></p>
            </div>
        </div>
    </div>
    <div id="nav">
        <ul>
            <li class="upp current_page">
                <a href="dashboard.php">Dashboard</a>

            </li>
            <li class="upp">
                <a href="nekretnine_lista.php">Nekretnine</a>
            </li>
            <li class="upp">
                <a href="vesti_lista.php">Vesti</a>
            </li>
            <li class="upp">
                <a href="lokacije_lista.php">Lokacije</a>
            </li>
        </ul>
    </div>
</div>