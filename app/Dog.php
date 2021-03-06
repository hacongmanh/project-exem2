<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function getGenderStringAttribute(){
        if($this->gender == 1){
            return 'male';
        }else{
            return 'female';
        }

    }
    public function timeLine(){
        return $this->hasOne('App\Timeline','dog_id','id');
    }

    public function getPriceFormatAttribute(){
        return ConvertPrice::formatMoney($this->price);
    }

    public function getStatusStringAttribute(){
        if($this->status == 0){
            return '<div class="text-danger">Chờ duyệt</div>';
        }else if($this->status == 1){
            return '<div class="text-success">Đã duyệt</div>';
        }else{
            return 'Chưa xác định';
        }
    }
    private static $cloudinary_link = 'https://res.cloudinary.com/dzpmsbjzh/image/upload/';

    public function getSmallPhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU';
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . 'w_100,c_scale/' . $photos[0] . '.jpg';
    }

    public function getLargePhotoAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU';
        }
        $photos = explode(',', $this->thumbnail);
        return self::$cloudinary_link . $photos[0] . '.jpg';
    }

    public function getSmallPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'w_100,c_scale/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getLargePhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPreviewPhotosAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'c_limit,h_60,w_90/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->thumbnail == null || strlen($this->thumbnail) == 0) {
            return array();
        }
        $list_ids = array();
        $photos = explode(',', $this->thumbnail);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }

}
