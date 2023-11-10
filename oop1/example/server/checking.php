<?php

declare(strict_types=1);
class KiemTraChanLe
{
    private function getData(): array
    {
        $number = $_POST['number'] ?? null;
        $number = is_numeric($number) ? $number : null;
        if ($number === null) {
            return [
                'mes' => 'please enter a number',
                'number' => null
            ];
        }
        return [
            'mess' => 'OK',
            'number' => $number
        ];
    }
    private function checkingNumber(): bool
    {
        $arrData = $this->getData();
        if ($arrData['number'] === null) {
            return false;
        }
        return $arrData['number'] / 2 === 0;
    }

    public function show(): void
    {
        $data = $this->getData();
        $number = $data['number'];
        if($this->checkingNumber()){
            header("Location:../index.php?state={$number}");
        }else {
            header("Location:../index.php?state={$number}");
        }
    }
}
$check = new KiemTraChanLe();
$check->show();
