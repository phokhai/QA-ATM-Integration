<?php namespace Stub;

class StubWithdrawal
{
    private $accNo;

    public function __construct(string $accNo)
    {
        $this->accNo = $accNo;
    }

    public function withdraw(string $amount): array
    {
        if ($this->accNo == '1234567890') {
            return array("isError" => false, "accNo" => $this->accNo, "accName" => "TestAccountName", "accBalance" => $amount + 20);
        } else {
            return array("isError" => true, "message" => "Account number : " . $this->accNo . " not found.");
        }
    }
}
