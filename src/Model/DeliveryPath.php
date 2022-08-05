<?php

declare(strict_types=1);

namespace BitBag\PPClient\Model;

final class DeliveryPath
{
    private string $endNode;

    private string $targetingNode;

    private string $assistantNode;

    private string $reloadingPoint;

    private string $postOffice;

    private string $deliveryRegion;

    public function getEndNode(): string
    {
        return $this->endNode;
    }

    public function setEndNode(string $endNode): void
    {
        $this->endNode = $endNode;
    }

    public function getTargetingNode(): string
    {
        return $this->targetingNode;
    }

    public function setTargetingNode(string $targetingNode): void
    {
        $this->targetingNode = $targetingNode;
    }

    public function getAssistantNode(): string
    {
        return $this->assistantNode;
    }

    public function setAssistantNode(string $assistantNode): void
    {
        $this->assistantNode = $assistantNode;
    }

    public function getReloadingPoint(): string
    {
        return $this->reloadingPoint;
    }

    public function setReloadingPoint(string $reloadingPoint): void
    {
        $this->reloadingPoint = $reloadingPoint;
    }

    public function getPostOffice(): string
    {
        return $this->postOffice;
    }

    public function setPostOffice(string $postOffice): void
    {
        $this->postOffice = $postOffice;
    }

    public function getDeliveryRegion(): string
    {
        return $this->deliveryRegion;
    }

    public function setDeliveryRegion(string $deliveryRegion): void
    {
        $this->deliveryRegion = $deliveryRegion;
    }
}
