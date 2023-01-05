<?php

namespace App\Pdf;

use setasign\Fpdi\Fpdi;

class RFPDI extends FPDI
{
    public $angle = 0;

    public function Rotate($angle, $x = -1, $y = -1)
    {
        // $this->setPrintHeader(false);
        // $this->setPrintFooter(false);

        if ($x == -1) {
            $x = $this->x;
        }

        if ($y == -1) {
            $y = $this->y;
        }

        if ($this->angle != 0) {
            $this->_out('Q');
        }

        $this->angle = $angle;

        if ($angle != 0) {
            $angle *= M_PI / 180;
            $c = cos($angle);
            $s = sin($angle);
            $cx = $x * $this->k;
            $cy = ($this->h - $y) * $this->k;
            $this->_out(
                sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm', $c, $s, -$s, $c, $cx, $cy, -$cx, -$cy)
            );
        }
    }

    public function RotateClockWise()
    {
        $this->Rotate(270, (297 / 2), (297 / 2));
    }

    public function RotateCounterClockWise()
    {
        $this->Rotate(90, (210 / 2), (210 / 2));
    }

    function _endpage()
    {
        if ($this->angle != 0) {
            $this->angle = 0;
            $this->_out('Q');
        }
        parent::_endpage();
    }
    function RotatedText($x,$y,$txt,$angle)
    {
        //Text rotated around its origin
        $this->Rotate($angle,$x,$y);
        $this->Text($x,$y,$txt);
        $this->Rotate(0);
    }

}
