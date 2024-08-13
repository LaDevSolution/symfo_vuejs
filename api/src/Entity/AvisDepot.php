<?php

namespace App\Entity;

use App\Repository\AvisDepotRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AvisDepotRepository::class)]
class AvisDepot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $srt = null;

    #[ORM\Column(length: 255)]
    private ?string $dateEnClair = null;

    #[ORM\Column(length: 255)]
    private ?string $bieAdresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bieCadT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsTitre = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsNom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsPrenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsAdresse = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsCodepos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $trsCommune = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $reference = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDrsT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDdnT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDpnT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDadT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDcpT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDlcT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dosDnmT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dpcAnmT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dpcApnT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dpcAadT = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dpcAcpT = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nature = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $surfEx = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $surfCc = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDemande = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDepot = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateComplet = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDecision = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $decision = null;

    #[ORM\Column(nullable: true)]
    private ?int $srt2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $srt3 = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $insee = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSrt(): ?int
    {
        return $this->srt;
    }

    public function setSrt(int $srt): static
    {
        $this->srt = $srt;

        return $this;
    }

    public function getDateEnClair(): ?string
    {
        return $this->dateEnClair;
    }

    public function setDateEnClair(string $dateEnClair): static
    {
        $this->dateEnClair = $dateEnClair;

        return $this;
    }

    public function getBieAdresse(): ?string
    {
        return $this->bieAdresse;
    }

    public function setBieAdresse(string $bieAdresse): static
    {
        $this->bieAdresse = $bieAdresse;

        return $this;
    }

    public function getBieCadT(): ?string
    {
        return $this->bieCadT;
    }

    public function setBieCadT(?string $bieCadT): static
    {
        $this->bieCadT = $bieCadT;

        return $this;
    }

    public function getTrsTitre(): ?string
    {
        return $this->trsTitre;
    }

    public function setTrsTitre(?string $trsTitre): static
    {
        $this->trsTitre = $trsTitre;

        return $this;
    }

    public function getTrsNom(): ?string
    {
        return $this->trsNom;
    }

    public function setTrsNom(?string $trsNom): static
    {
        $this->trsNom = $trsNom;

        return $this;
    }

    public function getTrsPrenom(): ?string
    {
        return $this->trsPrenom;
    }

    public function setTrsPrenom(?string $trsPrenom): static
    {
        $this->trsPrenom = $trsPrenom;

        return $this;
    }

    public function getTrsAdresse(): ?string
    {
        return $this->trsAdresse;
    }

    public function setTrsAdresse(?string $trsAdresse): static
    {
        $this->trsAdresse = $trsAdresse;

        return $this;
    }

    public function getTrsCodepos(): ?string
    {
        return $this->trsCodepos;
    }

    public function setTrsCodepos(?string $trsCodepos): static
    {
        $this->trsCodepos = $trsCodepos;

        return $this;
    }

    public function getTrsCommune(): ?string
    {
        return $this->trsCommune;
    }

    public function setTrsCommune(?string $trsCommune): static
    {
        $this->trsCommune = $trsCommune;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): static
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDosDrsT(): ?string
    {
        return $this->dosDrsT;
    }

    public function setDosDrsT(?string $dosDrsT): static
    {
        $this->dosDrsT = $dosDrsT;

        return $this;
    }

    public function getDosDdnT(): ?string
    {
        return $this->dosDdnT;
    }

    public function setDosDdnT(?string $dosDdnT): static
    {
        $this->dosDdnT = $dosDdnT;

        return $this;
    }

    public function getDosDpnT(): ?string
    {
        return $this->dosDpnT;
    }

    public function setDosDpnT(?string $dosDpnT): static
    {
        $this->dosDpnT = $dosDpnT;

        return $this;
    }

    public function getDosDadT(): ?string
    {
        return $this->dosDadT;
    }

    public function setDosDadT(?string $dosDadT): static
    {
        $this->dosDadT = $dosDadT;

        return $this;
    }

    public function getDosDcpT(): ?string
    {
        return $this->dosDcpT;
    }

    public function setDosDcpT(?string $dosDcpT): static
    {
        $this->dosDcpT = $dosDcpT;

        return $this;
    }

    public function getDosDlcT(): ?string
    {
        return $this->dosDlcT;
    }

    public function setDosDlcT(?string $dosDlcT): static
    {
        $this->dosDlcT = $dosDlcT;

        return $this;
    }

    public function getDosDnmT(): ?string
    {
        return $this->dosDnmT;
    }

    public function setDosDnmT(?string $dosDnmT): static
    {
        $this->dosDnmT = $dosDnmT;

        return $this;
    }

    public function getDpcAnmT(): ?string
    {
        return $this->dpcAnmT;
    }

    public function setDpcAnmT(?string $dpcAnmT): static
    {
        $this->dpcAnmT = $dpcAnmT;

        return $this;
    }

    public function getDpcApnT(): ?string
    {
        return $this->dpcApnT;
    }

    public function setDpcApnT(?string $dpcApnT): static
    {
        $this->dpcApnT = $dpcApnT;

        return $this;
    }

    public function getDpcAadT(): ?string
    {
        return $this->dpcAadT;
    }

    public function setDpcAadT(?string $dpcAadT): static
    {
        $this->dpcAadT = $dpcAadT;

        return $this;
    }

    public function getDpcAcpT(): ?string
    {
        return $this->dpcAcpT;
    }

    public function setDpcAcpT(?string $dpcAcpT): static
    {
        $this->dpcAcpT = $dpcAcpT;

        return $this;
    }

    public function getNature(): ?string
    {
        return $this->nature;
    }

    public function setNature(?string $nature): static
    {
        $this->nature = $nature;

        return $this;
    }

    public function getSurfEx(): ?string
    {
        return $this->surfEx;
    }

    public function setSurfEx(?string $surfEx): static
    {
        $this->surfEx = $surfEx;

        return $this;
    }

    public function getSurfCc(): ?string
    {
        return $this->surfCc;
    }

    public function setSurfCc(?string $surfCc): static
    {
        $this->surfCc = $surfCc;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(?\DateTimeInterface $dateDemande): static
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(?\DateTimeInterface $dateDepot): static
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateComplet(): ?\DateTimeInterface
    {
        return $this->dateComplet;
    }

    public function setDateComplet(?\DateTimeInterface $dateComplet): static
    {
        $this->dateComplet = $dateComplet;

        return $this;
    }

    public function getDateDecision(): ?\DateTimeInterface
    {
        return $this->dateDecision;
    }

    public function setDateDecision(?\DateTimeInterface $dateDecision): static
    {
        $this->dateDecision = $dateDecision;

        return $this;
    }

    public function getDecision(): ?\DateTimeInterface
    {
        return $this->decision;
    }

    public function setDecision(?\DateTimeInterface $decision): static
    {
        $this->decision = $decision;

        return $this;
    }

    public function getSrt2(): ?int
    {
        return $this->srt2;
    }

    public function setSrt2(?int $srt2): static
    {
        $this->srt2 = $srt2;

        return $this;
    }

    public function getSrt3(): ?string
    {
        return $this->srt3;
    }

    public function setSrt3(?string $srt3): static
    {
        $this->srt3 = $srt3;

        return $this;
    }

    public function getInsee(): ?string
    {
        return $this->insee;
    }

    public function setInsee(?string $insee): static
    {
        $this->insee = $insee;

        return $this;
    }
}
