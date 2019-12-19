import styled from "styled-components";

export const HeaderWrapper = styled.header`
  background-image: ${props =>
    props.header
      ? `linear-gradient(0deg, rgba(85, 45, 30, 0.7), rgba(85, 45, 30, 0.7)), url(${props.image})`
      : `url(${props.image})`};
  background-position: center center;
  background-repeat: no-repeat;
  object-fit: cover;
  background-repeat: no-repeat;
  background-size: cover;
  height: 100vh;
  width: 100%;

  @media (max-width: 768px) {
    height: 85vh;
  }

  .landingwords {
    text-align: center;
    word-break: normal;
    padding: auto;
    width: 50%;
    margin: auto;
    vertical-align: middle;
    margin-top: ${props => (props.header ? "15vw" : "10vw")};
    color: white;

    h2 {
      font-style: normal;
      font-weight: bold;
      font-size: 3rem;
      line-height: 132.83%;
      /* or 64px */

      /* display: flex; */
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
      margin-top: 3rem;
      /* or 40px */

      /* display: flex; */
      align-items: center;
      text-align: center;

      color: #ffffff;
    }
  }

  @media (max-width: 768px) {
    .landingwords {
      text-align: center;
      word-break: normal;
      width: 100%;
      padding: 2rem;
      margin: auto;
      margin-top: 15vw;
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
