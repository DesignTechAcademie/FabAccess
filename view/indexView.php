<?php
spl_autoload_register(function ($class) {
    include '../Class/' . $class . '.class.php';
});
?>


<main>
	<div id ="row">
		<h2>Interface Admin</h2>
		<h5>Bienvenue Admin, content de te revoir.</h5>
	</div>
    <div class="row">
        <!-- <p>alalala</p> -->

        <h2>Evenements du jour</h2>
        <?php
        $agenda = new Agenda();
        $event_du_jour = $agenda->get("32971823");

        if (is_array($event_du_jour)) {
            echo $event_du_jour[1] . " - Lieu : " . $event_du_jour[2];
        } else {
            echo $event_du_jour;
        }

        ?>

    </div>
  </div>
</main>
