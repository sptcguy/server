<?php

declare(strict_types=1);

namespace OCP\Security\Signature;

use OCP\Security\Signature\Model\IIncomingSignedRequest;
use OCP\Security\Signature\Model\IOutgoingSignedRequest;
use OCP\Security\Signature\Model\ISignatory;

interface ISignatureManager {
	public function getIncomingSignedRequest(ISignatoryManager $signatoryManager, ?string $body = null): IIncomingSignedRequest;
	public function getOutgoingSignedRequest(ISignatoryManager $signatoryManager, string $content, string $method, string $uri): IOutgoingSignedRequest;
	public function signOutgoingRequestIClientPayload(ISignatoryManager $signatoryManager, array $payload, string $method, string $uri): array;
	public function searchSignatory(string $host, string $account = ''): ISignatory;
}
