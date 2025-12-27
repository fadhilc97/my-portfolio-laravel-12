<?php

namespace App\Interface;

interface BlogServiceInterface {
  public function publishPost(string $slug): void;
  public function archivePost(string $slug): void;
}