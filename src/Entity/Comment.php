<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userlauncherid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreated;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usertargetid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Travel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $travelid;

    /**
     * @ORM\Column(type="integer")
     */
    private $rating;

    public function getId()
    {
        return $this->id;
    }

    public function getUserlauncherid(): ?User
    {
        return $this->userlauncherid;
    }

    public function setUserlauncherid(?User $userlauncherid): self
    {
        $this->userlauncherid = $userlauncherid;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDatecreated(): ?\DateTimeInterface
    {
        return $this->datecreated;
    }

    public function setDatecreated(\DateTimeInterface $datecreated): self
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    public function getUsertargetid(): ?User
    {
        return $this->usertargetid;
    }

    public function setUsertargetid(?User $usertargetid): self
    {
        $this->usertargetid = $usertargetid;

        return $this;
    }

    public function getTravelid(): ?Travel
    {
        return $this->travelid;
    }

    public function setTravelid(?Travel $travelid): self
    {
        $this->travelid = $travelid;

        return $this;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

        return $this;
    }
}
