<?php

namespace mysiar\Bundle\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="invoices")
 * @ORM\Entity(repositoryClass="mysiar\Bundle\InvoiceBundle\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_number", type="string", length=255)
     */
    private $invoiceNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_issue", type="date")
     */
    private $dateOfIssue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_sell", type="date")
     */
    private $dateOfSell;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_due", type="date")
     */
    private $paymentDue;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set invoiceNumber
     *
     * @param string $invoiceNumber
     * @return Invoice
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return string 
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set dateOfIssue
     *
     * @param \DateTime $dateOfIssue
     * @return Invoice
     */
    public function setDateOfIssue($dateOfIssue)
    {
        $this->dateOfIssue = $dateOfIssue;

        return $this;
    }

    /**
     * Get dateOfIssue
     *
     * @return \DateTime 
     */
    public function getDateOfIssue()
    {
        return $this->dateOfIssue;
    }

    /**
     * Set dateOfSell
     *
     * @param \DateTime $dateOfSell
     * @return Invoice
     */
    public function setDateOfSell($dateOfSell)
    {
        $this->dateOfSell = $dateOfSell;

        return $this;
    }

    /**
     * Get dateOfSell
     *
     * @return \DateTime 
     */
    public function getDateOfSell()
    {
        return $this->dateOfSell;
    }

    /**
     * Set paymentDue
     *
     * @param \DateTime $paymentDue
     * @return Invoice
     */
    public function setPaymentDue($paymentDue)
    {
        $this->paymentDue = $paymentDue;

        return $this;
    }

    /**
     * Get paymentDue
     *
     * @return \DateTime 
     */
    public function getPaymentDue()
    {
        return $this->paymentDue;
    }
}