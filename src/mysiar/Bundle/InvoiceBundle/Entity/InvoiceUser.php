<?php

namespace mysiar\Bundle\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Symfony\Component\Validator\Constraints as Assert;





/**
 * InvoiceUser
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="mysiar\Bundle\InvoiceBundle\Repository\InvoiceUserRepository")
 */
class InvoiceUser extends BaseUser
{

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="invoiceUser")
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="invoiceUser")
     */
    private $clients;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * * @ORM\Column(name="locale", type="string", length=2)
     */

    private $locale;

    /**
     * Payment in number of days
     *
     * @var int
     *
     * @Assert\GreaterThan(0)
     *
     * @ORM\Column(name="payment", type="integer", nullable=false)
     *
     */
    private $payment;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_number_prefix", type="string", length=255, nullable=true)
     */
    private $invoiceNumberPrefix;


    /**
     * @var string
     *
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="vat_id", type="string", length=255)
     */
    private $vatId;

    /**
     * @var string
     *
     * @ORM\Column(name="address_street", type="string", length=255)
     */
    private $addressStreet;

    /**
     * @var string
     *
     * @ORM\Column(name="address_house", type="string", length=255, nullable=true)
     */
    private $addressHouse;

    /**
     * @var string
     *
     * @ORM\Column(name="address_flat", type="string", length=255, nullable=true)
     */
    private $addressFlat;

    /**
     * @var string
     *
     * @ORM\Column(name="address_zip", type="string", length=255)
     */
    private $addressZip;

    /**
     * @var string
     *
     * @ORM\Column(name="address_city", type="string", length=255)
     */
    private $addressCity;

    /**
     * @var string
     *
     * @ORM\Column(name="address_country", type="string", length=255, nullable=true)
     */
    private $addressCountry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $dummy = str_repeat(".", 5);
        parent::__construct();
        $this->clients = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locale = "en";
        $this->payment = 30;
        $this->companyName = $dummy;
        $this->vatId = $dummy;
        $this->addressStreet = $dummy;
        $this->addressHouse = $dummy;
        $this->addressFlat = $dummy;
        $this->addressZip = $dummy;
        $this->addressCity = $dummy;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param int $payment
     * @return InvoiceUser
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumberPrefix()
    {
        return $this->invoiceNumberPrefix;
    }

    /**
     * @param string $invoiceNumberPrefix
     * @return InvoiceUser
     */
    public function setInvoiceNumberPrefix($invoiceNumberPrefix)
    {
        $this->invoiceNumberPrefix = $invoiceNumberPrefix;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return InvoiceUser
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param string $vatId
     * @return InvoiceUser
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->addressStreet;
    }

    /**
     * @param string $addressStreet
     * @return InvoiceUser
     */
    public function setAddressStreet($addressStreet)
    {
        $this->addressStreet = $addressStreet;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressHouse()
    {
        return $this->addressHouse;
    }

    /**
     * @param string $addressHouse
     * @return InvoiceUser
     */
    public function setAddressHouse($addressHouse)
    {
        $this->addressHouse = $addressHouse;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressFlat()
    {
        return $this->addressFlat;
    }

    /**
     * @param string $addressFlat
     * @return InvoiceUser
     */
    public function setAddressFlat($addressFlat)
    {
        $this->addressFlat = $addressFlat;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * @param string $addressZip
     * @return InvoiceUser
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param string $addressCity
     * @return InvoiceUser
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return InvoiceUser
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param mixed $locale
     * @return InvoiceUser
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Add client
     *
     * @param \mysiar\Bundle\InvoiceBundle\Entity\Client $client
     *
     * @return InvoiceUser
     */
    public function addClient(\mysiar\Bundle\InvoiceBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \mysiar\Bundle\InvoiceBundle\Entity\Client $client
     */
    public function removeClient(\mysiar\Bundle\InvoiceBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add product
     *
     * @param \mysiar\Bundle\InvoiceBundle\Entity\Product $product
     *
     * @return InvoiceUser
     */
    public function addProduct(\mysiar\Bundle\InvoiceBundle\Entity\Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \mysiar\Bundle\InvoiceBundle\Entity\Product $product
     */
    public function removeProduct(\mysiar\Bundle\InvoiceBundle\Entity\Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }
}
