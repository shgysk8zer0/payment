<?php
namespace shgysk8zer0\Payment\Interfaces;

use \JsonSerializable;

interface PaymentAddressInterface extends JsonSerializable
{
	/**
	 * Returns an array of strings providing each line of the address not included among
	 * the other properties. The exact size and content varies by country or
	 * location and can include, for example, a street name, house number,
	 * apartment number, rural delivery route, descriptive instructions, or
	 * post office box number.
	 * @return array Lines of the address
	 */
	public function getAddressLine(): array;

	/**
	 * Sets an array of strings providing each line of the address not included among
	 * the other properties. The exact size and content varies by country or
	 * location and can include, for example, a street name, house number,
	 * apartment number, rural delivery route, descriptive instructions, or
	 * post office box number.
	 * @param string... $vals Lines of the address
	 */
	public function setAddressLine(string... $vals): void;

	public function getCountry(): string;

	public function setCountry(string $val): void;

	public function getCity(): string;

	public function setCity(string $val): void;

	/**
	 * Returns a string giving the dependent locality or sublocality within a city,
	 * for example, a neighborhood, borough, district, or UK dependent locality.
	 * @return string Dependent locality
	 */
	public function getDependentLocality():? string;

	/**
	 * Sets a string giving the dependent locality or sublocality within a city,
	 * for example, a neighborhood, borough, district, or UK dependent locality.
	 * @param ?string $val Dependent locality
	 */
	public function setDependentLocality(?string $val): void;

	public function getOrganization():? string;

	public function setOrganization(?string $val): void;

	public function getPhone():? string;

	public function setPhone(?string $val): void;

	public function getPostalCode():? string;

	public function setPostalCode(?string $val): void;

	public function getRecipient():? string;

	public function setRecipient(?string $val): void;

	/**
	 * Returns a string containing the top level administrative subdivision of
	 * the country, for example a state, province, oblast, or prefecture.
	 * @return string The set region
	 */
	public function getRegion(): string;

	/**
	 * Sets the string containing the top level administrative subdivision of
	 * the country, for example a state, province, oblast, or prefecture.
	 * @param string $val The region to set
	 */
	public function setRegion(string $val): void;

	/**
	 * Returns A string specifying the region of the address, represented as a
	 * "code element" of an ISO3166-2 country subdivision name (e.g. "QLD" for
	 * Queensland, Australia, "CA" for California, and so on).
	 * @return string The region code / abbreviation
	 */
	public function getRegionCode():? string;

	/**
	 * Sets a string specifying the region of the address, represented as a
	 * "code element" of an ISO3166-2 country subdivision name (e.g. "QLD" for
	 * Queensland, Australia, "CA" for California, and so on).
	 * @param ?string $val Region code
	 */
	public function setRegionCode(?string $val): void;

	/**
	 * Returns a string providing a postal sorting code such as is used in France.
	 * @return string Sorting Code
	 */
	public function getSortingCode():? string;

	/**
	 * Sets a string providing a postal sorting code such as is used in France.
	 * @param ?string $val Sorting Code
	 */
	public function setSortingCode(?string $val): void;
}
