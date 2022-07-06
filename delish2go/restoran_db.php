<?php
class RestoranDB {
    public static function getRestaurants()
    {
        $db=Database::getDB();
        $query='SELECT * FROM restoran
                ORDER BY ID';
        $statement = $db->prepare($query);
        $statement->execute();

        $restorani = array();
        foreach ($statement as $row){
        $restoran = new Restoran($row['ID'],
                                 $row['Ime'],
                                 $row['Rabotno vreme']);
        $restorani[] = $restoran;
        }
        return $restorani;
    }
    
    public static function getRestaurant($restoran_id)
    {
    $db = Database::getDB();
    $query = 'SELECT * FROM restoran
              WHERE ID = :restoran_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':restoran_id', $restoran_id);
    $statement->execute();    
    $row = $statement->fetch();
    $statement->closeCursor();    
    $restoran = new Restoran($row['ID'],
                             $row['Ime'],
                             $row['Rabotno vreme']);
    return $restoran;

    }

    public static function addRestaurant($restoran) {
        $db = Database::getDB();

        $category_id = $product->getCategory()->getID();
        $code = $product->getCode();
        $name = $product->getName();
        $price = $product->getPrice();

        $restoran_id = $restoran->getID();
        $ime = $restoran->getIme();
        $RabVreme = $restoran->getRabotnoVreme();

        $query = 'INSERT INTO restoran
                     (ID, Ime, Rabotno vreme)
                  VALUES
                     (:restoran_id, :ime, :RabVreme)';
        $statement = $db->prepare($query);
        $statement->bindValue(':restoran_id', $restoran_id);
        $statement->bindValue(':ime', $ime);
        $statement->bindValue(':RabVreme', $RabVreme);
        $statement->execute();
        $statement->closeCursor();
    }

    public static function deleteRestaurant($restoran_id) {
        $db = Database::getDB();
        $query = 'DELETE FROM restoran
                  WHERE 0ID = :restoran_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':restoran_id', $restoran_id);
        $statement->execute();
        $statement->closeCursor();
    }

}




?>