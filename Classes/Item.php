<?php

namespace Classes;

include_once './fonctions.php';
include_once './fonctions_sql.php';

class Item
{
    protected int $product_id;
    protected string $name;
    protected string $description;
    protected float $price;
    protected string $imageUrl;
    protected int $weight;
    protected int $stock;
    protected bool|null $available;

    public function __construct($item,$itemName)
    {
        $this->name = $itemName;
        $this->product_id = $item['product_id'];
        $this->description = $item['description'];
        $this->price = $item['price'];
        $this->imageUrl = $item['picture'];
        $this->weight = $item['weight'];
        $this->stock = $item['stock'];
        if ($item['available'] === 1) {
            $this->available = true;
        } elseif ($item['available'] === 0) {
            $this->available = false;
        } else {
            $this->available = null;
        }
    }

    public function getProductId(): int
    {
        return $this->product_id;
    }

    public function setProductId(int $product_id): void
    {
        $this->product_id = $product_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): void
    {
        $this->available = $available;
    }


}