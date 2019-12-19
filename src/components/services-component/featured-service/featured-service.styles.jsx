import styled from "styled-components";

export const FeaturedServiceWrapper = styled.article`
  margin: 1rem;
  text-align: center;
  padding: 0rem;
  /* box-sizing: border-box; */
  /* card */

  div.img {
    height: 166.69px;
    vertical-align: middle;
    padding-top: 1.2rem;

    /* light */
    background: #fff5ee;
  }

  div.title {
    height: 68px;
    text-align: center;
    background: #ffffff;
    padding: 1rem 3rem;
    border-radius: 0px 0px 13.5px 13.5px;
    box-shadow: 0px 4px 26px rgba(0, 0, 0, 0.06);
  }

  h2 {
    font-size: 21px;
    font-weight: 900;
    line-height: 140.62%;
    /* or 42px */

    /* brown */

    color: #552d1e;
  }

  @media (max-width: 768px) {
    margin: 3rem 1rem;
  }
`;
