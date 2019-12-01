<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity()
* @ORM\Table(name="user_account")
*/

class User {

		/**
		* @ORM\Id()
		* @ORM\GeneratedValue()
		* @ORM\Column(type="integer")
		*/
		private $id;

		/**
		* @ORM\Column(type="string", length=50)
		*/
		private $lastname;

		/**
			* @ORM\Column(type="string", length=50)
			*/
		private $firstname;

		/**
			* @ORM\Column(type="date", nullable=true)
			*/
		private $birthday;

			/**
			* Get the value of birthday
			*/
			public function getBirthday()
			{
						return $this->birthday;
			}

			/**
			* Set the value of birthday
			*
			* @return  self
			*/
			public function setBirthday($birthday)
			{
						$this->birthday = $birthday;

						return $this;
			}



		/**
			* Get the value of lastname
			*/
		public function getLastname()
		{
					return $this->lastname;
		}

		/**
			* Set the value of lastname
			*
			* @return  self
			*/
		public function setLastname($lastname)
		{
					$this->lastname = $lastname;

					return $this;
		}

		/**
		 * Get 			* @ORM\Column(type="string", length=50)
		 */
		public function getFirstname()
		{
				return $this->firstname;
		}

		/**
		 * Set 			* @ORM\Column(type="string", length=50)
		 *
		 * @return  self
		 */
		public function setFirstname($firstname)
		{
				$this->firstname = $firstname;

				return $this;
		}

		/**
		 * Get 		* @ORM\Id()
		 */
		public function getId()
		{
				return $this->id;
		}

		/**
		 * Set 		* @ORM\Id()
		 *
		 * @return  self
		 */
		public function setId($id)
		{
				$this->id = $id;

				return $this;
		}
}
