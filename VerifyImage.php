<?php
/**
 * Created by PhpStorm.
 * User: kiwi feng
 * Date: 2017/9/7
 * Time: 22:20
 */

class VerifyImage
{

    public $m_verify_code;
    public $m_image;

    /**
     * @param int $code_type
     * case $code_type == 1: only numbers;
     * case $code_type == 2: only letters;
     * case $code_type == 3: numbers and letters;
     * @param int $code_length
     * @return string
     */
    private function CreateRandomVerifyCode($code_type = 1, $code_length = 4) {
        if ($code_type == 1) {
            $chars = join("", range(0, 9));
        } elseif ($code_type == 2) {
            $chars = join("", array_merge(range('a', 'z'), range('A', 'Z')));
        } else {
            $chars = join("", array_merge(range(0, 9), range('a', 'z'), range('A', 'Z')));
        }
        if (strlen($chars) < $code_length) {
            exit("Error in VerifyImage(class): 字符串长度不够，CreateRandomVerifyCode Failed");
        }
        $chars = str_shuffle($chars);
        $m_verify_code=substr($chars, 0, $code_length);
        return $m_verify_code;
    }
    /**
     * @param int $width
     * @param int $height
     * @param int $pixed_num
     * @param int $line_num
     * @param int $code_type
     * @param int $code_length
     */
    public function CreateVerifyImage($width = 100, $height = 40, $pixed_num = 80, $line_num = 5, $code_type = 3, $code_length = 4) {
        $m_verify_code = $this->CreateRandomVerifyCode($code_type, $code_length);
        $m_image = imagecreatetruecolor($width, $height);
        $white = imagecolorallocate($m_image, 255, 255, 255);
        imagefill($m_image, 0, 0, $white);
//        注意：将字体导入到fonts目录下
//        $font_files = array(dirname(__FILE__).'/fonts/AGENCYB.TTF',dirname(__FILE__). '/fonts/svgafix.fon');
        $font=dirname(__FILE__).'/fonts/CHILLER.TTF';
        for($i = 0; $i < $code_length; $i++) {
            $size = mt_rand(30,35);
            $angle = mt_rand(-25, 25);
//            将字符串显示到一个居中的位置
            $x = (imagefontwidth($size) + 5) * ($i + 1);
            $y = ($height - imagefontheight($size)) / 2 + rand($size/2,$size/3*2);
            $color = imagecolorallocate($m_image, mt_rand(0, 150), mt_rand(0, 150), mt_rand(0, 150));
            //$font = $font_files[mt_rand(0, count($font_files)-1)];
            $text = substr($m_verify_code, $i, 1);
            imagettftext($m_image, $size, $angle, $x, $y, $color, $font, $text);
        }
        for($i = 0; $i < $pixed_num; $i++) {
            $color = imagecolorallocate($m_image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($m_image, mt_rand(0, $width), mt_rand(0,$height), $color);
        }
        for($i = 0; $i < $line_num; $i++) {
            $color = imagecolorallocate($m_image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imageline($m_image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), $color);
        }
        header('content-type: image/png');
        imagepng($m_image);
        imagedestroy($m_image);
    }
}
?>