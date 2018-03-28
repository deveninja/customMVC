<?php require APPROOT . '/views/includes/header.php'; ?>

    <?php echo $data['title']; ?>
    <br>
    <?php echo $data['description']; ?>

    <br>
    <br>
    <br>

    
         <?php foreach($data['milestones'] as $milestone ) : ?>
            
                <?php echo $milestone->title; ?>
                            
            
            <br>
            
        <?php endforeach; ?>
        
        <p>contact the <?php echo WEBMASTER; ?></p>


<?php require APPROOT . '/views/includes/footer.php'; ?>
