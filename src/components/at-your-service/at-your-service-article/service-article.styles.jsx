import styled from "styled-components";

export const ServiceArticleWrapper = styled.div`
  height: 200px;
  background: linear-gradient(
      180deg,
      rgba(0, 0, 0, 0.4) 31.6%,
      rgba(0, 0, 0, 0.62) 73.45%
    ),
    ${props => `url(${props.img})`};
  display: flex;
  align-items: flex-end;
  padding: 0 1rem 1rem;

  & > div {
    display: flex;
    justify-content: space-between;
    color: #ffffff;

    h2 {
      font-size: 21px;
      line-height: 30px;
      font-weight: 900;
    }

    small {
      font-weight: normal;
      color: #ffffff;
    }

    button {
      background: rgba(0, 0, 0, 0.5);
      border: 1px solid #ffffff;
      box-sizing: border-box;
      border-radius: 31px;
      max-height: 30px;
      align-self: flex-end;
      padding: 0.5rem 1rem;

      p {
        font-size: 10px;
        color: #ffffff;
        mix-blend-mode: normal;
        font-weight: 600;
      }
    }
  }
`;
