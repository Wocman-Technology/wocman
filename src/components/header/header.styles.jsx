import styled from "styled-components";
import HeaderImage from "../../assets/header.svg";

export const HeaderWrapper = styled.header`
  background-image: url(${HeaderImage});
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: cover;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
  width: 100%;

  .landingwords {
    display: block;
    text-align: center;
    word-break: normal;
    padding: auto;
    width: 50%;
    margin: 0 auto;
    margin-top: 10vw;
    color: white;

    h2 {
      font-style: normal;
      font-weight: bold;
      font-size: 3rem;
      line-height: 132.83%;
      /* or 64px */

      display: flex;
      align-items: center;
      text-align: center;
      /* text-transform: capitalize; */

      color: #ffffff;
    }

    p {
      font-style: normal;
      font-weight: 500;
      font-size: 1.5rem;
      line-height: 180%;
      /* or 40px */

      display: flex;
      align-items: center;
      text-align: center;

      color: #ffffff;
    }
  }

  .header-button {
    display: flex;
    width: 80%;
    position: absolute;
    margin: auto;
    bottom: 4rem;
    left: 9.2rem;
    padding: 0;

    button {
      font-size: 0.7rem;
    }


    @media (max-width: 1125px) {
      left: 7.3rem;
    }

    @media (max-width: 900px) {
      display: none;
    }
  }

  @media (max-width: 768px){
    .landingwords {
    display: block;
    text-align: center;
    word-break: normal;
    width: 100%;
    padding: 2rem;
    margin: auto;
    margin-top: 10vw;
    color: white;
    h2 {
        font-size: 2.5rem;
    }
    p {
        font-size: 1.5rem;
        margin-top: 3rem;
    }
    }
  }

  @media (max-width: 350px) {
    h2 {
        font-size: 1.7rem !important;
    }
    p {
        font-size: 1rem !important;
        margin-top: 2rem !important;
  }
}
`;
