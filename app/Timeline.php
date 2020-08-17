<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Timeline extends Model
{
    private static $cloudinary_link = 'https://res.cloudinary.com/dzpmsbjzh/image/upload/';

    public function dog()
    {
        return $this->belongsTo('App\Dog', 'dog_id', 'id');
    }

    public function account()
    {
        return $this->belongsTo('App\Account', 'created_by', 'id');
    }
    public function comment()
    {
        return $this->belongsTo('App\Comments', 'timeline_id', 'id');
    }



    public function getSmallPhotoAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU';
        }
        $photos = explode(',', $this->links);
        return self::$cloudinary_link . 'w_100,c_scale/' . $photos[0] . '.jpg';
    }

    public function getLargePhotoAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU';
        }
        $photos = explode(',', $this->links);
        return self::$cloudinary_link . $photos[0] . '.jpg';
    }

    public function getSmallPhotosAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->links);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'w_100,c_scale/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getLargePhotosAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->links);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPreviewPhotosAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return array('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcScdHD-KQQkMQdJcXTSALcRVFp7chjRbA0e-w&usqp=CAU');
        }
        $list_photos = array();
        $photos = explode(',', $this->links);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_photos, self::$cloudinary_link . 'c_limit,h_60,w_90/' . $p . '.jpg');
            }
        }
        return $list_photos;
    }

    public function getPhotoIdsAttribute()
    {
        if ($this->links == null || strlen($this->links) == 0) {
            return array();
        }
        $list_ids = array();
        $photos = explode(',', $this->links);
        foreach ($photos as $p) {
            if (strlen($p) > 0) {
                array_push($list_ids, $p);
            }
        }
        return $list_ids;
    }
}
