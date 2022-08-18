<?php

namespace interfaces;

interface DBFactoryInterface
{
    public function getConnection(): ConnectInterface;
    public function getInsert(): InsertInterface;
    public function getQueryBuilder(): BuilderInterface;
} 