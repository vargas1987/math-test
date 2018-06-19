<?php

namespace Commands;

use Lib\Math;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ArithmeticsCommand extends Command
{
    /** @var  string */
    private $firstNumber;
    /** @var  string */
    private $secondNumber;

    public function configure()
    {
        $this
            ->setName('custom')
            ->setDescription('Execute Arithmetics Number Validation Command.')
            ->addArgument('f', InputArgument::REQUIRED, 'The first input number.')
            ->addArgument('s', InputArgument::REQUIRED, 'The second input number.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setFirstNumber($input->getArgument('f'));
        $this->setSecondNumber($input->getArgument('s'));

        $math = new Math();

        $output->writeln($math->div($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->mul($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->sum($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->sub($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->eq($this->getFirstNumber(), $this->getSecondNumber()) ? 'equal' : 'not equal');
        $output->writeln($math->greaterThan($this->getFirstNumber(), $this->getSecondNumber()) ? 'greater' : 'not greater');
        $output->writeln($math->greaterOrEqualThan($this->getFirstNumber(), $this->getSecondNumber()) ? 'greaterOrEqual' : 'not greaterOrEqual');
        $output->writeln($math->lessThan($this->getFirstNumber(), $this->getSecondNumber()) ? 'lessThan' : 'not lessThan');
        $output->writeln($math->lessOrEqualThan($this->getFirstNumber(), $this->getSecondNumber()) ? 'lessOrEqualThan' : 'not lessOrEqualThan');
        $output->writeln($math->comp($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->pow($this->getFirstNumber(), $this->getSecondNumber()));
        $output->writeln($math->sqrt($this->getFirstNumber()));
        $output->writeln($math->abs($this->getFirstNumber()));
    }

    /**
     * @return string
     */
    public function getFirstNumber()
    {
        return $this->firstNumber;
    }

    /**
     * @param string $firstNumber
     * @return $this
     */
    public function setFirstNumber(string $firstNumber)
    {
        $this->firstNumber = $firstNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecondNumber()
    {
        return $this->secondNumber;
    }

    /**
     * @param string $secondNumber
     * @return $this
     */
    public function setSecondNumber(string $secondNumber)
    {
        $this->secondNumber =  $secondNumber;

        return $this;
    }


}