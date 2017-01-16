<?php

class HouseHelper extends AppHelper {

    public $helpers = ['Html'];

    public function photoImage($house, $options = []) {

        $photoDir = Configure::read('Photo.dir');
        $defaultPhoto = Configure::read('Photo.default');

        if (empty($house['House']['photo'])) {
            $path = $defaultPhoto;
        } else {
            $path = $photoDir . $house['House']['photo_dir'] . '/' . $house['House']['photo'];
        }

        return $this->Html->image($path, $options);
    }

}
